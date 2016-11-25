<?php

namespace Core\Session;

use Core\Model\CoreSessionTable;
use Phpfox\Session\SaveHandlerInterface;

class DbSaveHandler implements SaveHandlerInterface
{
    /**
     * @var string
     */
    protected $save_path;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    private $lifetime = 86400;

    /**
     * DbSaveHandler constructor.
     *
     * @param array $configs
     */
    public function __construct($configs = [])
    {
        $configs = array_merge([
            'lifetime' => 86400,
        ]);
        $this->lifetime = (int)$configs['lifetime'];

        if (!$this->lifetime) {
            $this->lifetime = 86400;
        }
    }

    /**
     * @return CoreSessionTable
     */
    public function getGateway()
    {
        return service('models')->get('session');
    }

    public function close()
    {
        return true;
    }

    public function destroy($session_id)
    {
        $this->getGateway()->deleteById($session_id);
    }

    public function gc($maxlifetime)
    {
        $this->getGateway()->gc($maxlifetime);
    }

    public function open($save_path, $name)
    {
        $this->save_path = $save_path;
        $this->name = $name;
        return true;
    }

    public function read($session_id)
    {
        $row = $this->getGateway()->findById($session_id);

        if (!$row) {
            return '';
        }

        if ((int)$row->modified + (int)$row->lifetime < time()) {
            return '';
        }

        return $row->data;
    }

    public function write($session_id, $session_data)
    {

        $gateway = $this->getGateway();
        $row = $gateway->findById($session_id);

        if (!$row) {
            $gateway->insert([
                'id'       => $session_id,
                'data'     => $session_data,
                'name'     => (string)$this->name,
                'modified' => time(),
                'lifetime' => $this->lifetime,
            ]);
        } else {
            $gateway->update([
                'data'     => (string)$session_data,
                'modified' => time(),
            ])->where('id=?', $session_id)->execute();
        }

        return true;
    }

}
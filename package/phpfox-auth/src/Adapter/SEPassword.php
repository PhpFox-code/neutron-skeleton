<?php
namespace Auth\Adapter;

use Phpfox\Auth\AuthPasswordInterface;

/**
 * Class SEPassword
 *
 * @package Auth\Adapter
 */
class SEAuthPassword implements AuthPasswordInterface
{
    public function isValid($input, $params)
    {
        if (!$input) {
            return false;
        }

        if ($params['source_id'] !== 'se') {
            return false;
        }

        return $params['hash'] == md5($params['static_salt'] . $input
            . $params['salt']);
    }

    public function createHash($input, $salt, $static_salt = null)
    {
        return sha1(md5($input) . md5($salt));
    }

    public function createSalt($length = 5)
    {
        $salt = '';
        for ($index = 0; $index < $length; ++$index) {
            $salt .= chr(mt_rand(48, 122));
        }
        return $salt;
    }
}
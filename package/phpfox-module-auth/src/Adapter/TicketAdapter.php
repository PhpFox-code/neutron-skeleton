<?php
namespace Auth\Adapter;

use Auth\Model\AuthTicket;
use Phpfox\Auth\AdapterInterface;
use Phpfox\Auth\AuthResult;

/**
 * Class TicketAdapter
 *
 * @package Auth\Adapter
 */
class TicketAdapter implements AdapterInterface
{
    /**
     * private $sevice;
     *
     * /**
     * @var string
     */
    private $identity;

    /**
     * @var string
     */
    private $credential;

    /**
     * TicketAdapter constructor.
     *
     * @param string $identity
     * @param string $credential
     */
    public function __construct($identity, $credential)
    {
        $this->identity = $identity;
        $this->credential = $credential;
    }

    public function authenticate()
    {
        $result = new AuthResult();

        if (!$this->identity) {
            $result->setCode(AuthResult::MISSING_IDENTITY);
            return $result;
        }

        if (!$this->credential) {
            $result->setCode(AuthResult::MISSING_CREDENTIAL);
        }

        $ticket = $this->findTicket();

        if (!$ticket) {
            $result->setCode(AuthResult::INVALID_CREDENTIAL);
        }
    }

    /**
     * @return AuthTicket|null
     */
    private function findTicket()
    {
        return service('tables')->get('auth_ticket')
            ->findTicket($this->identity, $this->credential);
    }
}
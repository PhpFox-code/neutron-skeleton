<?php
namespace Auth\Adapter;

use Auth\Model\AuthTicket;
use Phpfox\Auth\AdapterInterface;
use Phpfox\Auth\Result;

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
        $result = new Result();

        if (!$this->identity) {
            $result->setCode(Result::MISSING_IDENTITY);
            return $result;
        }

        if (!$this->credential) {
            $result->setCode(Result::MISSING_CREDENTIAL);
        }

        $ticket = $this->findTicket();

        if (!$ticket) {
            $result->setCode(Result::INVALID_CREDENTIAL);
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
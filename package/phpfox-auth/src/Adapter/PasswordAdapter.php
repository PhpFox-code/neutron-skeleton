<?php

namespace Auth\Adapter;

use Auth\Model\AuthPassword;
use Phpfox\Auth\AdapterInterface;
use Phpfox\Auth\AuthPasswordInterface;
use Phpfox\Auth\AuthResult;
use User\Model\User;

class PasswordAdapter implements AdapterInterface
{
    /**
     * @var string
     */
    private $identity;

    /**
     * @var string
     */
    private $credential;

    /**
     * AuthPassword constructor.
     *
     * @param string $identity
     * @param string $credential
     */
    public function __construct($identity, $credential)
    {
        $this->identity = $identity;
        $this->credential = $credential;
    }

    /**
     * @inheritdoc
     */
    public function authenticate()
    {
        $result = new AuthResult();

        if (!$this->identity) {
            $result->setCode(AuthResult::MISSING_IDENTITY);
            return $result;
        }

        if (!$this->credential) {
            $result->setCode(AuthResult::MISSING_CREDENTIAL);
            return $result;
        }

        $user = $this->findUser($this->identity);

        if (!$user instanceof User) {
            $result->setCode(AuthResult::INVALID_IDENTITY);
        }

        $pwd = $this->findPassword($user->getId());

        if (!$pwd) {
            $result->setCode(AuthResult::UN_CATEGORIZE);
            return $result;
        }
        $validators = $this->getValidators();

        $valid = false;

        $params = [
            'source_id'   => $pwd->getSourceId(),
            'hash'        => $pwd->getSalt(),
            'salt'        => $pwd->getSalt(),
            'static_salt' => $pwd->getStaticSalt(),
            'extra'       => $pwd->getExtra(),
        ];

        foreach ($validators as $validator) {
            if ($validator->validate($this->credential, $params)) {
                $valid = true;
                break;
            }
        }

        if ($valid) {
            $result->setCode(AuthResult::SUCCESS)->setIdentity($user->getId());
            return $result;
        }

        $result->setCode(AuthResult::INVALID_CREDENTIAL);
        return $result;
    }

    /**
     * @param $identity
     *
     * @return User|null
     */
    protected function findUser($identity)
    {
        $gateway = service('tables')->get('user');

        $isMail = strpos($identity, '@') > 0;
        $isNumber = preg_match('\d', $identity);

        // pre-filter email pattern
        if ($isMail and null != ($user
                = $gateway->findByEmail($identity))
        ) {
            return $user;
        }

        if (!$isMail and null != ($user
                = $gateway->findByUsername($identity))
        ) {
            return $user;
        }

        if ($isNumber and null != ($user = $gateway->findByNumber($identity))) {
            return $user;
        }

        if ($isNumber and null != ($user = $gateway->findById($identity))) {
            return $user;
        }

        return null;
    }

    /**
     * @param $userId
     *
     * @return AuthPassword|null
     */
    protected function findPassword($userId)
    {
        return service('tables')->get('auth_password')->findByUserId($userId);
    }

    /**
     * @return AuthPasswordInterface[]
     */
    public function getValidators()
    {
        return [];
    }
}
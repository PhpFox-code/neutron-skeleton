<?php

namespace Auth\Adapter;

use Phpfox\Auth\AuthPasswordInterface;

/**
 * Class DefaultPassword
 *
 * @package Auth\Adapter
 */
class DefaultAuthPassword implements AuthPasswordInterface
{
    public function isValid($input, $params)
    {
        if (!$input) {
            return false;
        }

        return $this->createHash($input, $params['salt']) == $params['hash'];
    }

    public function createHash($input, $salt, $static_salt = null)
    {
        return sha1(md5($input) . md5($salt));
    }

    public function createSalt($length = 5)
    {
        $salt = '';
        for ($index = 0; $index < $length; ++$index) {
            $salt .= chr(mt_rand(48,122));
        }
        return $salt;
    }
}
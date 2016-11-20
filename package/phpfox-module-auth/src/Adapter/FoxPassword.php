<?php

namespace Auth\Adapter;

use Phpfox\Auth\AuthPasswordInterface;

/**
 * Class FoxPassword
 *
 * @package Auth\Adapter
 */
class FoxAuthPassword implements AuthPasswordInterface
{

    public function isValid($input, $params)
    {
        if (!$input || !$params['source_id'] == 'fox') {
            return false;
        }

        $hash = $params['hash'];

        // version 4.0 compatible
        if (strlen($hash) > 32) {
            if (!function_exists('crypt')) {
                return false;
            }

            $ret = crypt($input, $hash);

            if ($this->_strlen($ret) <= 13) {
                return false;
            }

            $status = 0;

            for ($i = 0; $i < $this->_strlen($ret); $i++) {
                $status |= (ord($ret[$i]) ^ ord($hash[$i]));
            }

            return $status === 0;
        }

        // phpfox v3 compatible
        return md5(md5($input) . md5($params['salt'])) == $params['hash'];
    }

    /**
     * @param $string
     *
     * @return int
     */
    private function _strlen($string)
    {
        return mb_strlen($string, '8bit');
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
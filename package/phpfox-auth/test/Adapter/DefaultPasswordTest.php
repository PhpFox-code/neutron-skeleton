<?php

namespace Auth\Adapter;

use PHPUnit_Framework_TestCase;

class DefaultPasswordTest extends PHPUnit_Framework_TestCase
{
    public function testValidator()
    {
        $validator = new DefaultAuthPassword();

        $input = 'abc';
        $salt = uniqid('_');
        $hash = $validator->createHash($input, $salt);
        $params = ['salt' => $salt, 'hash' => $hash,];

        $this->assertTrue($validator->isValid($input, $params),
            'Invalid hash recheck');
    }
}

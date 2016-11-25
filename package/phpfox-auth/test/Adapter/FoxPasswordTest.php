<?php

namespace Auth\Adapter;


class FoxPasswordTest extends \PHPUnit_Framework_TestCase
{

    public function testV4Password()
    {
        $correctPassword = '123456';
        $wrongPassword = '1234567';

        $params = [
            'source_id' => 'fox',
            'hash'      => '$2y$10$eO/nRD4KPbvtzQJjE26d1OjjXYjQj96pfExn8Gpva5yD/36UsoG2e',
            'salt'      => 'OJ$',
        ];

        $validator = new FoxAuthPassword();

        $this->assertTrue($validator->isValid($correctPassword, $params),
            'Not match password validator');

        $this->assertFalse($validator->isValid($wrongPassword, $params),
            'Not match password validator');
    }
}

<?php
namespace Auth\Adapter;


class SEPasswordTest extends \PHPUnit_Framework_TestCase
{

    public function testPassword()
    {
        $correctPassword = 'namnv123';
        $wrongPassword = 'namnv123_';

        $params = [
            'source_id' => 'se',
            'hash'      => 'f34f4680984cc6813bd6936abdea7d56',
            'salt'      => '8715889',
            'static_salt'=>'d5ce2b64dd404eef960328078fc348f9fdd3b123',
        ];

        $validator = new SEAuthPassword();

        $this->assertTrue($validator->isValid($correctPassword, $params),
            'Not match password validator');

        $this->assertFalse($validator->isValid($wrongPassword, $params),
            'Not match password validator');
    }
}

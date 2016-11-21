<?php

namespace Auth\Model;

use Phpfox\Db\TableGateway;

class AuthPasswordTable extends TableGateway
{
    protected $_identity = 'id';

    protected $_columns
        = [
            'id'          => 1,
            'user_id'     => 1,
            'hash'        => 1,
            'salt'        => 1,
            'static_salt' => 1,
            'source_id'   => 1,
            'updated'     => 1,
        ];

    protected $_primary = ['id' => 1,];
}
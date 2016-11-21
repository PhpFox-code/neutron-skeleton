<?php

namespace Auth\Model;

use Phpfox\Db\TableGateway;

class AuthLogTable extends TableGateway
{
    protected $_identity = 'id';

    protected $_columns
        = [
            'id'      => 1,
            'ip'      => 1,
            'message' => 1,
            'level'   => 1,
            'updated' => 1,
        ];

    protected $_primary = ['id' => 1,];
}
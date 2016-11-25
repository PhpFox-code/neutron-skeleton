<?php

namespace Core\Model;

use Phpfox\Db\TableGateway;

class StorageServiceTable extends TableGateway
{
    protected $_identity = 'id';

    protected $_columns
        = [
            'driver'       => 1,
            'json_configs' => 1,
            'is_active'    => 1,
            'is_default'   => 1,
        ];

    protected $_primary
        = [
            'id' => 1,
        ];
}
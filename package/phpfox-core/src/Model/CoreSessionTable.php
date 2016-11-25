<?php

namespace Core\Model;


use Phpfox\Db\TableGateway;

class CoreSessionTable extends TableGateway
{
    protected $_identity = '';

    protected $_columns
        = [
            'id'       => 1,
            'name'     => 1,
            'modified' => 1,
            'lifetime' => 1,
            'data'     => 1,
        ];

    public function findById($id)
    {
        return $this->sqlSelect()
            ->where('id=?', (string)$id)
            ->execute()
            ->fetch();
    }
}
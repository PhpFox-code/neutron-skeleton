<?php

namespace Core\Factory;


use Phpfox\Storage\StorageManager;
use Phpfox\Storage\StorageServiceFactory;

class StorageManagerFactory
{
    public function factory()
    {
        $rows = $this->adapter()->sqlSelect()->select('*')
            ->from(':core_storage_service')->execute()->fetch();

        $configs = [
            'default' => 1,
            'map'     => [],
            'factory' => new StorageServiceFactory(),
        ];

        foreach ($rows as $v) {
            $id = $v['id'];
            if ($v['is_default']) {
                $configs['default'] = $id;
            }
            
            $json_configs = json_decode($v['json_configs'], true);
            unset($v['json_configs']);
            $configs['map'][$id] = array_merge($v, $json_configs);
        }

        return new StorageManager($configs);
    }
}
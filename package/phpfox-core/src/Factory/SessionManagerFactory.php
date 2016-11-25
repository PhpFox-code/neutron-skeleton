<?php

namespace Core\Factory;

use Phpfox\Session\SessionManager;

class SessionManagerFactory
{
    public function factory()
    {
        return new SessionManager([
            'driver' => 'files',
        ]);
    }
}
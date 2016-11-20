<?php

namespace Auth\Controller;

use Phpfox\Mvc\StandardController;
use Phpfox\View\ViewModel;

/**
 * Class LoginController
 *
 * @package Auth\Controller
 */
class LoginController extends StandardController
{
    /**
     * @return ViewModel
     */
    public function actionIndex()
    {
        $requester = service('requester');

        service('log.auth')->debug(var_export($requester->getParams()));

        if ($requester->isPost()) {

        } else {

        }

        return new ViewModel('auth/login/index');
    }
}
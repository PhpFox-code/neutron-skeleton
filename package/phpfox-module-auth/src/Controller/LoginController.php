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

        service('html_header')
            ->get('title')
            ->set('Login');

        service('log.auth')->debug(var_export($requester->getParams(),true));

        if ($requester->isPost()) {

        } else {

        }

        return new ViewModel('auth/login/index');
    }
}
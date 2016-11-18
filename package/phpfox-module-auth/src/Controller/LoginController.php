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
        $requester = $this->serviceManager->get('requester');

        $this->serviceManager->get('log')->container('info')
            ->debug(var_export($requester->getParams()));

        return new ViewModel('authentication/login/index');
    }
}
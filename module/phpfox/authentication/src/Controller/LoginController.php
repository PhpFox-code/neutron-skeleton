<?php

namespace Authentication\Controller;

use Phpfox\Mvc\StandardController;
use Phpfox\View\ViewModel;

/**
 * Class LoginController
 *
 * @package Authentication\Controller
 */
class LoginController extends StandardController
{
    /**
     * @return ViewModel
     */
    public function actionIndex()
    {
        return new ViewModel('authentication/login/index');
    }
}
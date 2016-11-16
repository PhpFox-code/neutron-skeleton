<?php

namespace Authentication\Controller;


use Phpfox\Mvc\StandardController;
use Phpfox\View\ViewModel;

/**
 * Class LogoutController
 *
 * @package Authentication\Controller
 */
class LogoutController extends StandardController
{
    public function actionIndex()
    {
        $viewModel = new ViewModel('authentication/logout/index');

        $viewModel->setTemplate('authentication/logout/index');

        $viewModel->terminate();
    }
}
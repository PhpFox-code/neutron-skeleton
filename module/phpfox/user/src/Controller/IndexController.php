<?php

namespace User\Controller;

use Phpfox\Mvc\StandardController;
use Phpfox\View\ViewModel;

/**
 * Class IndexController
 *
 * @package User\Controller
 */
class IndexController extends StandardController
{
    public function actionIndex()
    {
        $viewModel = new ViewModel();

        return $viewModel;
    }
}
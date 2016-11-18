<?php

namespace User\Controller;

use Phpfox\Mvc\StandardController;
use Phpfox\View\ViewModel;

/**
 * Class IndexController
 *
 * @package User\Controller
 */
class MemberController extends StandardController
{
    public function actionIndex()
    {
        $viewModel = new ViewModel('user/member/index');

        return $viewModel;
    }
}
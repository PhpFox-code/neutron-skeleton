<?php
namespace User\Controller;

use Phpfox\Mvc\StandardController;
use Phpfox\View\ViewModel;

class IndexController extends StandardController
{
    public function actionIndex()
    {
        return new ViewModel('user/index/index',[]);
    }
}
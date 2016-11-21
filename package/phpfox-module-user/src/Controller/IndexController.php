<?php
namespace User\Controller;

use Phpfox\Mvc\StandardController;
use Phpfox\View\ViewModel;

class IndexController extends StandardController
{
    public function actionIndex()
    {
        service('html_header')
            ->get('title')
            ->set('Member Home Page');

        // assign template layout
        service('layout')
            ->setPageName('user/index/index');

        return new ViewModel('user/index/index',[]);
    }
}
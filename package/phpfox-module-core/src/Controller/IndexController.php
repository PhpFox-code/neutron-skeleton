<?php

namespace Core\Controller;

use Phpfox\Mvc\StandardController;
use Phpfox\View\ViewModel;

class IndexController extends StandardController
{
    public function actionIndex()
    {
        service('html_header')
            ->get('title')
            ->append('Main page')
            ->append('Blog Post');

        return new ViewModel('core/index/index');
    }
}
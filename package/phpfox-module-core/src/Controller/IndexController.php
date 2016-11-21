<?php

namespace Core\Controller;

use Phpfox\Mvc\StandardController;
use Phpfox\View\ViewModel;

class IndexController extends StandardController
{
    public function actionIndex()
    {
        if (true) {
            return $this->forward('User\Controller\IndexController', 'index');
        }

        service('html_header')->get('title')
            ->clear()
            ->append('Main page')
            ->append('Blog Post');

        return new ViewModel('core/index/index');
    }
}
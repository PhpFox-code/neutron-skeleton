<?php

namespace Core\Controller;

use Phpfox\Mvc\StandardController;
use Phpfox\View\ViewModel;

class ErrorController extends StandardController
{
    public function action500()
    {
        return new ViewModel('core/error/500', []);
    }

    public function action404()
    {
        service('layout')->setTemplate('layout/master/404');

        return new ViewModel('core/error/404', []);
    }

    public function action503()
    {
        return new ViewModel('core/error/503', []);
    }
}
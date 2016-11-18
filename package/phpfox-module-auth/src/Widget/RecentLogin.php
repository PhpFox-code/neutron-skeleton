<?php

namespace Auth\Widget;

use Phpfox\View\ViewModel;
use Phpfox\ViewWidget\StandardWidget;

class RecentLogin extends StandardWidget
{
    public function dispatch()
    {
        return new ViewModel('user/widget/recent-login', []);
    }
}
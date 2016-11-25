<?php

namespace Auth\Widget;

use Phpfox\View\ViewModel;
use Phpfox\Widget\StandardWidget;

class RecentLogin extends StandardWidget
{
    public function resolve()
    {
        return new ViewModel('user/widget/recent-login', []);
    }
}
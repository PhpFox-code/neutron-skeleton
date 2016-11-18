<?php

namespace Auth\Widget;

use Phpfox\View\ViewModel;
use Phpfox\ViewWidget\StandardWidget;

/**
 * Class SmallLogin
 *
 * @package Auth\Widget
 */
class SmallLogin extends StandardWidget
{
    public function dispatch()
    {
        return new ViewModel('user/widget/small-login', []);
    }
}
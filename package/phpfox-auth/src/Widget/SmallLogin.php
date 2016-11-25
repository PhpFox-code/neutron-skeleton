<?php

namespace Auth\Widget;

use Phpfox\View\ViewModel;
use Phpfox\Widget\StandardWidget;

/**
 * Class SmallLogin
 *
 * @package Auth\Widget
 */
class SmallLogin extends StandardWidget
{
    public function resolve()
    {
        return new ViewModel('user/widget/small-login', []);
    }
}
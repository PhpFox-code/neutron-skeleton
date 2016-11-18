<?php
namespace Core\Widget;

use Phpfox\View\ViewModel;
use Phpfox\ViewWidget\StandardWidget;

/**
 * Class CategoryWidget
 *
 * @package Core\Widget
 */
class CategoryWidget extends StandardWidget
{
    /**
     * @inheritdoc
     */
    public function dispatch()
    {
        return new ViewModel('core/widget/category', []);
    }
}
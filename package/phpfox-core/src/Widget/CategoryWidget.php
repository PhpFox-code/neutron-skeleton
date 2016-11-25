<?php
namespace Core\Widget;

use Phpfox\View\ViewModel;
use Phpfox\Widget\StandardWidget;

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
    public function resolve()
    {
        return new ViewModel('core/widget/category', []);
    }
}
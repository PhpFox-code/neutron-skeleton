<?php

namespace PhpfoxThemeDefault\Listener;


class ThemeListener
{
    public function onViewLayoutPrepare()
    {
        $header = service('html_header');
        $footer = service('html_footer');
        $title = $header->get('title');

        if ($title->isEmpty()) {
            $title->append('Phpfox Community')->setSeparator(' &raquo; ');
        }

        $header->get('styles')->prepend(null,
            '/phpfoxv5/static/theme/default/stylesheets/bundle.css')
            ->append(null,
                '/phpfoxv5/static/theme/default/stylesheets/custom.css');

        $footer->get('scripts')
            ->prepend(null, '/phpfoxv5/static/jscript/dist/require.js')
            ->append(null, '/phpfoxv5/static/jscript/dist/primary.js');

    }
}
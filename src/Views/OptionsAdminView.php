<?php

namespace WonderWp\Component\Template\Views;

use WonderWp\Component\DependencyInjection\Container;

class OptionsAdminView extends AdminVue
{
    /** @inheritdoc */
    public function registerFrags($prefix, array $frags = [])
    {
        $container = Container::getInstance();

        $frags = [
            new VueFrag($container->offsetGet($prefix . '.wwp.path.templates.frags.header')),
            new VueFrag($container->offsetGet($prefix . '.wwp.path.templates.frags.tabs')),
            new VueFrag($container->offsetGet($prefix . '.wwp.path.templates.frags.options')),
            new VueFrag($container->offsetGet($prefix . '.wwp.path.templates.frags.footer')),
        ];

        return parent::registerFrags($prefix, $frags);
    }
}

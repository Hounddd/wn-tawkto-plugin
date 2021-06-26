<?php namespace Hounddd\Tawkto;

use Backend;
use System\Classes\PluginBase;

/**
 * Tawkto Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'hounddd.tawkto::lang.plugin.name',
            'description' => 'hounddd.tawkto::lang.plugin.description',
            'author'       => 'Hounddd',
            'icon'        => 'icon-comments'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Hounddd\Tawkto\Components\Tawkto' => 'tawkTo',
        ];
    }

    /**
     * Registers back-end settings used by this plugin.
     *
     * @return array
     */
    public function registerSettings(): array
    {
        return [
            'config' => [
                'label' => 'hounddd.tawkto::lang.plugin.name',
                'icon' => 'icon-comments',
                'description' => 'hounddd.tawkto::lang.settings.description',
                'class' => 'Hounddd\Tawkto\Models\Settings',
                'permissions' => ['hounddd.tawkto.settings'],
                'order' => 600
            ]
        ];
    }
}

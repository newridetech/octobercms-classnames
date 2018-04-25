<?php

namespace Newride\Classnames;

use System\Classes\PluginBase;

/**
 * Classnames Plugin Information File.
 */
class Plugin extends PluginBase
{
    public function classnames(...$classnames): string
    {
        return Classnames::make(...$classnames);
    }

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Classnames',
            'description' => 'Developer tool to generate CSS classnames.',
            'author' => 'Newride',
            'icon' => 'icon-leaf',
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'classnames' => [$this, 'classnames'],
            ],
        ];
    }
}

<?php namespace Hounddd\Tawkto\Components;

use Lang;
use Cms\Classes\ComponentBase;
use Hounddd\Tawkto\Models\Settings;

class Tawkto extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'hounddd.tawkto::lang.components.tawkto.name',
            'description' => 'hounddd.tawkto::lang.components.tawkto.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'tawkto_chat_link' => [
                'title' => Lang::get('hounddd.tawkto::lang.components.tawkto.tawkto_chat_link'),
                'description' => Lang::get('hounddd.tawkto::lang.components.tawkto.tawkto_chat_link_desc'),
                'default' => '',
                'type' => 'string'
            ]
        ];
    }

    /**
     * @return string
     */
    public function tawktoId()
    {
        $link = $this->property('tawkto_chat_link') ?: Settings::get('tawkto_chat_link');
        $tawktoId = str_replace('https://tawk.to/chat/', '', $link);

        return $tawktoId;
    }
}

<?php

namespace Kanboard\Plugin\Trelloboard;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on("template:layout:css", array("template" => "plugins/Trelloboard/skin.css"));
    }

    public function getPluginName()
    {
        return 'Trello CSS-style';
    }

    public function getPluginDescription()
    {
        return t('A CSS-only theme for Kanboard');
    }

    public function getPluginAuthor()
    {
        return 'mvpngn';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/mvpngn/blueboard';
    }
}

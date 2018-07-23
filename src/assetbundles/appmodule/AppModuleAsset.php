<?php
/**
 * AppModule module for Craft CMS 3.x
 *
 * The app module.
 *
 * @link      http://fusionary.com
 * @copyright Copyright (c) 2018 Tim Kelty
 */

namespace modules\appmodule\assetbundles\AppModule;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    Tim Kelty
 * @package   AppModule
 * @since     1.0.0
 */
class AppModuleAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@modules/appmodule/assetbundles/appmodule/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/AppModule.js',
        ];

        $this->css = [
            'css/AppModule.css',
        ];

        parent::init();
    }
}

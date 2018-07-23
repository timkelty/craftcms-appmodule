<?php
/**
 * AppModule module for Craft CMS 3.x
 *
 * The app module.
 *
 * @link      http://fusionary.com
 * @copyright Copyright (c) 2018 Tim Kelty
 */

namespace modules\appmodule\assetbundles\appmodulefieldfield;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    Tim Kelty
 * @package   AppModule
 * @since     1.0.0
 */
class AppModuleFieldFieldAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@modules/appmodule/assetbundles/appmodulefieldfield/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/AppModuleField.js',
        ];

        $this->css = [
            'css/AppModuleField.css',
        ];

        parent::init();
    }
}

<?php
/**
 * AppModule module for Craft CMS 3.x
 *
 * The app module.
 *
 * @link      http://fusionary.com
 * @copyright Copyright (c) 2018 Tim Kelty
 */

namespace modules\appmodule\widgets;

use modules\appmodule\AppModule;
use modules\appmodule\assetbundles\appmodulewidgetwidget\AppModuleWidgetWidgetAsset;

use Craft;
use craft\base\Widget;

/**
 * AppModule Widget
 *
 * @author    Tim Kelty
 * @package   AppModule
 * @since     1.0.0
 */
class AppModuleWidget extends Widget
{

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $message = 'Hello, world.';

    // Static Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return Craft::t('app-module', 'AppModuleWidget');
    }

    /**
     * @inheritdoc
     */
    public static function iconPath()
    {
        return Craft::getAlias("@appmodule/assetbundles/appmodulewidgetwidget/dist/img/AppModuleWidget-icon.svg");
    }

    /**
     * @inheritdoc
     */
    public static function maxColspan()
    {
        return null;
    }

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        $rules = parent::rules();
        $rules = array_merge(
            $rules,
            [
                ['message', 'string'],
                ['message', 'default', 'value' => 'Hello, world.'],
            ]
        );
        return $rules;
    }

    /**
     * @inheritdoc
     */
    public function getSettingsHtml()
    {
        return Craft::$app->getView()->renderTemplate(
            'app-module/_components/widgets/AppModuleWidget_settings',
            [
                'widget' => $this
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function getBodyHtml()
    {
        Craft::$app->getView()->registerAssetBundle(AppModuleWidgetWidgetAsset::class);

        return Craft::$app->getView()->renderTemplate(
            'app-module/_components/widgets/AppModuleWidget_body',
            [
                'message' => $this->message
            ]
        );
    }
}

<?php
/**
 * AppModule module for Craft CMS 3.x
 *
 * The app module.
 *
 * @link      http://fusionary.com
 * @copyright Copyright (c) 2018 Tim Kelty
 */

namespace modules\appmodule\records;

use modules\appmodule\AppModule;

use Craft;
use craft\db\ActiveRecord;

/**
 * @author    Tim Kelty
 * @package   AppModule
 * @since     1.0.0
 */
class AppModuleRecord extends ActiveRecord
{
    // Public Static Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%appmodule_appmodulerecord}}';
    }
}

<?php
/**
 * AppModule module for Craft CMS 3.x
 *
 * The app module.
 *
 * @link      http://fusionary.com
 * @copyright Copyright (c) 2018 Tim Kelty
 */

namespace modules\appmodule\services;

use modules\appmodule\AppModule;

use Craft;
use craft\base\Component;

/**
 * @author    Tim Kelty
 * @package   AppModule
 * @since     1.0.0
 */
class AppModuleService extends Component
{
    // Public Methods
    // =========================================================================

    /*
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}

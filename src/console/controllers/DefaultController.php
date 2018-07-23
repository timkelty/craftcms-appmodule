<?php
/**
 * AppModule module for Craft CMS 3.x
 *
 * The app module.
 *
 * @link      http://fusionary.com
 * @copyright Copyright (c) 2018 Tim Kelty
 */

namespace modules\appmodule\console\controllers;

use modules\appmodule\AppModule;

use Craft;
use yii\console\Controller;
use yii\helpers\Console;

/**
 * Default Command
 *
 * @author    Tim Kelty
 * @package   AppModule
 * @since     1.0.0
 */
class DefaultController extends Controller
{
    // Public Methods
    // =========================================================================

    /**
     * Handle app-module/default console commands
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'something';

        echo "Welcome to the console DefaultController actionIndex() method\n";

        return $result;
    }

    /**
     * Handle app-module/default/do-something console commands
     *
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'something';

        echo "Welcome to the console DefaultController actionDoSomething() method\n";

        return $result;
    }
}

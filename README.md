# AppModule module for Craft CMS 3.x

The app module.

## Requirements

This module requires Craft CMS 3.0.0-RC1 or later.

## Installation

To install the module, follow these instructions.

First, you'll need to add the contents of the `app.php` file to your `config/app.php` (or just copy it there if it does not exist). This ensures that your module will get loaded for each request. The file might look something like this:
```
return [
    'modules' => [
        'app-module' => [
            'class' => \modules\appmodule\AppModule::class,
            'components' => [
                'appModuleService' => [
                    'class' => 'modules\appmodule\services\AppModuleService',
                ],
            ],
        ],
    ],
    'bootstrap' => ['app-module'],
];
```
You'll also need to make sure that you add the following to your project's `composer.json` file so that Composer can find your module:

    "autoload": {
        "psr-4": {
          "modules\\appmodule\\": "modules/appmodule/src/"
        }
    },

After you have added this, you will need to do:

    composer dump-autoload
 
 …from the project’s root directory, to rebuild the Composer autoload map. This will happen automatically any time you do a `composer install` or `composer update` as well.

## AppModule Overview

-Insert text here-

## Using AppModule

-Insert text here-

## AppModule Roadmap

Some things to do, and ideas for potential features:

* Release it

Brought to you by [Tim Kelty](http://fusionary.com)

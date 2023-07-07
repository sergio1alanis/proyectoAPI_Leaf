<?php

namespace App\Controllers;

/**
 * This is the base controller for your Leaf MVC Project.
 * You can initialize packages or define methods here to use
 * them across all your other controllers which extend this one.
 */
class Controller extends \Leaf\Controller
{
    public function __construct()
    {
        parent::__construct();

        // autoConnect uses the .env variables to quickly connect to db
        // Leaf auth will smartly connect to this db connection.
        // If you enabled db sync in public/index.php, you can
        // delete this line.
        db()->autoConnect();

        // You can configure auth to get additional customizations
        // This can be done here with the auth()->config method or
        // simply in the config/auth.php file
        auth()->config(AuthConfig());

        // You can refer to https://leafphp.dev/modules/auth for auth docs
    }
}

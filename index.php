<?php

// composer install, composer dump-autoload
// require autoloader for composer
require 'vendor/autoload.php';

// put all bootstrapping in one file
require 'core/bootstrap.php';

// load routes, then direct request
Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
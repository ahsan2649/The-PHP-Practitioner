<?php

// composer install, composer dump-autoload
// require autoloader for composer
require 'vendor/autoload.php';

// put all bootstrapping in one file
require 'core/bootstrap.php';

// import Router and Request
use App\Core\{Router, Request};


// load routes, then direct request
Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());
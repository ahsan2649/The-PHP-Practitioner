<?php

// put all bootstrapping in one file
require 'core/bootstrap.php';



// Loading routes into router, and directing
require Router::load('routes.php')
    ->direct(Request::uri());
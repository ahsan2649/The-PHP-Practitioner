<?php

// put all bootstrapping in one file
require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri());
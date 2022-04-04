<?php

$users = $app['database']->selectAll('users');

// keep all views in a separate file
require 'views/index.view.php'; 
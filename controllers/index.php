<?php

$tasks = $app['database']->selectAll('todos');

// keep all views in a separate file
require 'views/index.view.php'; 
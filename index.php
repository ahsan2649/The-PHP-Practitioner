<?php

// put all bootstrapping in one file
$database = require 'bootstrap.php';

$tasks = $database->selectAll('todos');

// keep all views in a separate file
require 'index.view.php'; 
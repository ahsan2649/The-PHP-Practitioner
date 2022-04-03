<?php

// put all bootstrapping in one file
$query = require 'bootstrap.php';

$tasks = $query->selectAll('todos');

// keep all views in a separate file
require 'index.view.php'; 
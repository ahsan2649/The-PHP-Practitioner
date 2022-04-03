<?php

// keep classes in separate files
require 'Task.php';

// keep functions in a separate file
require 'functions.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);



// keep all views in a separate file
require 'index.view.php'; 
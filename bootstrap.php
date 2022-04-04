<?php


// // keep functions in a separate file
// require 'functions.php';

// config in separate file
$config = require 'config.php';

// refactor database and pdo
require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(
    Connection::make(
        $config['database']
        )
);
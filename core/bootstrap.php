<?php

$app = [];



// config in separate file
$app['config'] = require 'config.php';

// Router class for managing routes
require 'core/Router.php';

// Request class for managing uri(s)
require 'core/Request.php';

// refactor database and pdo
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
    Connection::make(
        $app['config']['database']
    )
);
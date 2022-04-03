<?php


// // keep functions in a separate file
// require 'functions.php';

// refactor database and pdo
require 'database/Connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(Connection::make());
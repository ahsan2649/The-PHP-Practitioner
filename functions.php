<?php

function fetchAllTasks($pdo){
    // Prepare and execute statements for pdo, then fetch data
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();

    // Fetch as class
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
};

function connectToDb(){
    // try catch for exception
    try {
    // PDO for accessing database
        return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '2649');
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

// define a function
function dd($data){    
    echo '<pre>';

    die(var_dump($data));

    echo '</pre>';
}
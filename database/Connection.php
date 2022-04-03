<?php

class Connection{
    // static functions are called through class
    // Connection::make();
    public static function make(){
        // try catch for exception
        try {
            // PDO for accessing database
            return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '2649');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
<?php

class Connection{
    // static functions are called through class
    // Connection::make();
    public static function make($config){
        // try catch for exception
        try {
            // PDO for accessing database
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
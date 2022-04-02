<?php

// Classes for creating objects
class Task {
    // Protected properties are only accessible to children
    protected $description;
    // Constructor runs when object is created
    public function __construct($description){
        $this -> description = $description;
    }
}

// Instantiating an object
$task = new Task('Go to the store');

// keep all views in a separate file
require 'index.view.php'; 
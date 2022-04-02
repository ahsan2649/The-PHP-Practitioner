<?php

// Classes for creating objects
class Task {
    public $description;
    public $completed = false;
    // Constructor runs when object is created
    public function __construct($description){
        $this -> description = $description;
    }

    // Functions are methods in a class
    public function isComplete(){
        return $this -> completed;
    }
    public function complete(){
        $this->completed = true;
    }
}

// Instantiating an object
$tasks = [
    new Task("Go to the store"),
    new Task('Finish the tutorials'),
    new Task('Finish learning german')
];

$tasks[0]->complete();

// keep all views in a separate file
require 'index.view.php'; 
<?php

$person = [
    'age' => 21,
    'hair' => 'black',
    'career' => 'web developer'

]; // Associative array

// push item to an array ($arr[] for non-associative arrays)
$person['name'] = 'Ahsan';

unset($person['age']); // remove item from an array

// die kills the execution
// var_dump outputs the entire variable or array
die(var_dump($person)); 

// require 'index.view.php';
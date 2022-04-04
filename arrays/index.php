<?php

class Post
{
    public $title;
    public $published;


    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post("My First Post", true),
    new Post("My Seconde Post", true),
    new Post("My Third Post", true),
    new Post("My Fourth Post", false),

];

var_dump($posts);
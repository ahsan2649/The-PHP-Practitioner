<?php

class Post
{
    public $title;
    public $published;
    public $author;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
    new Post("My First Post", 'JW',true),
    new Post("My Seconde Post", 'AAN',true),
    new Post("My Third Post", 'SI',true),
    new Post("My Fourth Post", 'FR',false),

];

// array_filter: filter posts depending on condition
// $unpublishedPosts = array_filter($posts, function($post){
//     return !$post->published;
// });

// $publishedPosts = array_filter($posts, function($post){
//     return $post->published;
// });

// array_map: modified array
// $modified = array_map(function($post){
//     return ['title' => $post->title];
// }, $posts);

// array_column: array of values under a key
// $titles = array_column($posts, 'author', 'writer');
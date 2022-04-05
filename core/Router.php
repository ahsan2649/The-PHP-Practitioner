<?php

namespace App\Core;

class Router{
    // Store routes
    public $routes = [
        'GET' => [],
        'POST'=> []
    ];

    // Create a router
    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    // Add URI and Controller to GET and POST
    public function get($uri, $controller){
        $this->routes['GET'][$uri] = $controller;
    }
    public function post($uri, $controller){
        $this->routes['POST'][$uri] = $controller;
    }
    
    // Send closure related to $uri to callAction
    public function direct($uri, $requestType){

        if(array_key_exists($uri, $this->routes[$requestType])){

            return $this->callAction(
                ...explode(
                    '@', $this->routes[$requestType][$uri]
                )

            );
        }

        throw new Exception('No route defined');
    }

    // Call $action in $controller
    protected function callAction($controller, $action){
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;
        if(!method_exists($controller, $action)){
            throw new Exception();
        }

        return $controller->$action();
    }
}
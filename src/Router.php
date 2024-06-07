<?php
// src/Router.php

namespace Sanahoucine\PhpNative;

class Router {
    private $routes = [];

    public function get($uri, $action) {
        $this->routes['GET'][$uri] = $action;

    }

    public function dispatch($uri) {
        $uri = parse_url($uri, PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];


        if (isset($this->routes[$method][$uri])) {
            $action = $this->routes[$method][$uri];

            list($controller, $method) = explode('@', $action);
            $controller = "Sanahoucine\\PhpNative\\Controllers\\$controller";
       

            if (class_exists($controller)) {
                call_user_func_array([new $controller, $method], []);
            } else {
                echo "Class $controller not found.<br>";
            }
        } else {
            // Handle 404
            echo "404 Not Found<br>";
        }
    }
}

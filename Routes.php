<?php


//  membuat Routes API 

$routes = [];

function route(string $path, callable $callback)
{

    global $routes;

    $routes[$path] = $callback;
}



// Routes
route('/', function () {
    echo "hello world";
});

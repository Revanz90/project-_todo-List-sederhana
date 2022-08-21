<?php

require('./Routes.php');

function run()
{
    global $routes;

    $uri = $_SERVER['REQUEST_URI'];

    foreach ($routes as $path => $callback) {
        if ($path !== $uri) {
            notFound();
        } else {
            $callback();
        }
    }
}


function notFound()
{
    echo "404 Not Found";
}

<?php

require('./Routes.php');


function Run()
{
    global $routes;
    $uri = $_SERVER['REQUEST_URI'];
    foreach ($routes as $path => $callback) {

        if ($path !== $uri) {
            continue;
        } else {
            $callback();
        }
    }
}

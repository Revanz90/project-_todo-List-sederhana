<?php

// controller
// require('./API/Database.php');
require('./API/api.php');

$routes = [];
$app = new Api();


function Routes(string $path, callable $callback)
{
    global $routes;
    $routes[$path] = $callback;
}


// runn
Routes('/', function () {
    global $app;
    $app->get_data();
});

Routes('/login', function () {
    echo 'Halaman Login';
});

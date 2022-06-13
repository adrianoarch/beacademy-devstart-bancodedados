<?php

include '../vendor/autoload.php';

use App\Controller\ErrorController;
// use App\Connection\Connection;

// $connection = Connection::getConnection();


// $query = "SELECT * FROM tb_category";

// $preparacao = $connection->prepare($query);
// $preparacao->execute();


// while ($linha = $preparacao->fetch(PDO::FETCH_ASSOC)) {
//     var_dump($linha);
// }


use App\Connection\Connection;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

$routes = include '../config/routes.php';

if (false === isset($routes[$url])) 
{
    (new ErrorController())->notFoundAction();
    exit;
}

$controllerName = $routes[$url]['controller'];
$actionName = $routes[$url]['action'];

(new $controllerName())->$actionName();

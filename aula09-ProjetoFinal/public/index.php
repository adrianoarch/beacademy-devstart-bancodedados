<?php

include '../vendor/autoload.php';

$database = 'db_store';
$username = 'root';
$password = '1234';

$connection = new PDO("mysql:host=localhost;dbname=$database", $username, $password);

$query = "SELECT * FROM tb_category";

$preparacao = $connection->prepare($query);
$preparacao->execute();


while ($linha = $preparacao->fetch(PDO::FETCH_ASSOC)) {
    var_dump($linha);
}

// use App\Controller\IndexController;
// use App\Controller\ProductController;
// use App\Controller\CategoryController;
// use App\Controller\ErrorController;

// $url = explode('?', $_SERVER['REQUEST_URI'])[0];

// function createRoute(string $controllerName, string $actionName)
// {
//     return [
//         'controller' => $controllerName,
//         'action' => $actionName,
//     ];
// }

// $routes = [
//     '/' => createRoute(IndexController::class, 'indexAction'),
//     '/login' => createRoute(IndexController::class, 'loginAction'),
//     '/produtos' => createRoute(ProductController::class, 'listAction'),
//     '/produtos/novo' => createRoute(ProductController::class, 'addAction'),
//     '/produtos/edit' => createRoute(ProductController::class, 'editAction'),
//     '/categorias' => createRoute(CategoryController::class, 'listAction'),
//     '/categorias/novo' => createRoute(CategoryController::class, 'addAction'),
//     '/categorias/edit' => createRoute(CategoryController::class, 'editAction'),

// ];

// if (false === isset($routes[$url])) {
//     (new ErrorController())->notFoundAction();
//     exit;
// }

// $controllerName = $routes[$url]['controller'];
// $actionName = $routes[$url]['action'];

// (new $controllerName())->$actionName();

// var_dump($routes[$url]);

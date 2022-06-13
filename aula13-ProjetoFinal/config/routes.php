<?php

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;


function createRoute(string $controllerName, string $actionName)
{
    return [
        'controller' => $controllerName,
        'action' => $actionName,
    ];
}

$routes = [
    '/' => createRoute(IndexController::class, 'indexAction'),
    '/login' => createRoute(IndexController::class, 'loginAction'),
    '/produtos' => createRoute(ProductController::class, 'listAction'),
    '/produtos/novo' => createRoute(ProductController::class, 'addAction'),
    '/produtos/edit' => createRoute(ProductController::class, 'editAction'),
    '/categorias' => createRoute(CategoryController::class, 'listCategoryAction'),
    '/categorias/nova' => createRoute(CategoryController::class, 'addCategoryAction'),
    '/categorias/edit' => createRoute(CategoryController::class, 'editCategoryAction'),
    '/categorias/excluir' => createRoute(CategoryController::class, 'deleteCategoryAction'),
];

return $routes;
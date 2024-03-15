<?php

use Bramus\Router\Router;
use Power\Ethereal\Controllers\Admin\AuthenticateController;
use Power\Ethereal\Controllers\Admin\DashboardController;
use Power\Ethereal\Controllers\Admin\UserController;
use Power\Ethereal\Controllers\Admin\CategoryController;
use Power\Ethereal\Controllers\Admin\PostController;
use Power\Ethereal\Controllers\Admin\TeacherController;
use Power\Ethereal\Controllers\Client\HomeController;
use Power\Ethereal\Controllers\Client\PostController as ClientPostController;
use Power\Ethereal\Controllers\Client\CategoryController as ClientCategoryController;

// Create Router instance
$router = new Router();

// Define routes
$router->get('/', HomeController::class . '@index');
$router->get('/post/{id}', ClientPostController::class . '@show');
$router->get('/category/{id}', ClientCategoryController::class . '@show');


$router->match('GET|POST', '/auth/login', AuthenticateController::class . '@login');

$router->mount('/admin', function () use ($router) {
    $router->get('/', DashboardController::class . '@index');
    $router->get('/logout', AuthenticateController::class . '@logout');

    $router->mount('/teacher', function () use ($router) {
        $router->get('/', TeacherController::class . '@index');
        $router->get('/{id}/show', TeacherController::class . '@show');
        $router->get('/{id}/delete', TeacherController::class . '@delete');
        $router->match('GET|POST', '/{id}/update', TeacherController::class . '@update');
        $router->match('GET|POST', '/create', TeacherController::class . '@create');
        $router->match('GET|POST', '/import', TeacherController::class . '@import');
    });

    $router->mount('/users', function () use ($router) {
        $router->get('/', UserController::class . '@index');
        $router->get('/{id}/show', UserController::class . '@show');
        $router->get('/{id}/delete', UserController::class . '@delete');
        $router->match('GET|POST', '/{id}/update', UserController::class . '@update');
        $router->match('GET|POST', '/{id}/account_settings', UserController::class . '@account_settings');
        $router->match('GET|POST', '/create', UserController::class . '@create');
    });

    $router->mount('/categorys', function () use ($router) {
        $router->get('/', CategoryController::class . '@index');
        $router->get('/{id}/show', CategoryController::class . '@show');
        $router->get('/{id}/delete', CategoryController::class . '@delete');
        $router->match('GET|POST', '/{id}/update', CategoryController::class . '@update');
        $router->match('GET|POST', '/create', CategoryController::class . '@create');
    });

    $router->mount('/posts', function () use ($router) {
        $router->get('/', PostController::class . '@index');
        $router->get('/{id}/show', PostController::class . '@show');
        $router->get('/{id}/delete', PostController::class . '@delete');
        $router->match('GET|POST', '/{id}/update', PostController::class . '@update');
        $router->match('GET|POST', '/create', PostController::class . '@create');
    });
});

$router->before('GET|POST', '/admin/*', function () {
    if (!isset ($_SESSION['user'])) {
        header('Location: /auth/login');
        exit ();
    }
});

$router->before('GET|POST', '/admin/.*', function () {
    if (!isset ($_SESSION['user'])) {
        header('Location: /auth/login');
        exit ();
    }
});

$router->run();

// Hiển thị trang 404 khi không tìm thấy url
if (http_response_code() === 404) {
    Error_404();
    exit();
}

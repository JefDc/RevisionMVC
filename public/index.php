<?php

require '../vendor/autoload.php';

// routing

if (preg_match("#^/admin/users#", $_SERVER['REQUEST_URI'])) {
    // Appeler le user controller avec méthode index
    $controller = new \User\Controller\UserController();
    echo $controller->index();
} elseif (preg_match("#^/admin\/user\/([0-9]+)$#", $_SERVER['REQUEST_URI'], $matches)) {
    $controller = new \User\Controller\UserController();
    echo $controller->show($matches[1]);
}
<?php

require '../vendor/autoload.php';

// routing

if (preg_match("#^/users#", $_SERVER['REQUEST_URI'])) {
    // Appeler le user controller avec méthode index
    $controller = new \User\Controller\UserController();
    echo $controller->index();
}
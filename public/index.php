<?php

session_start();
// On inclut dynamiquement le fichier de contrôleur
$controllerName = !empty($_GET['controller']) ? $_GET['controller'] : 'product';

if (file_exists("../controllers/$controllerName.controller.php")) {

    require "../controllers/$controllerName.controller.php";

    $action = !empty($_GET['action']) ? $_GET['action'] . 'Action' : 'indexAction';

    if (function_exists($action)) {
        $action(); // Index par défaut
    } else {
        require '../controllers/error.controller.php';
        notFound(); // Action 404
    }
} else {
    require '../controllers/error.controller.php';
    notFound(); // Action 404
}

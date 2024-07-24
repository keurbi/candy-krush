<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../config/constants.php'; // Inclure les constantes

session_start();

$controllerName = !empty($_GET['controller']) ? $_GET['controller'] : 'product';
$controllerPath = ROOT_PATH . 'controllers/' . $controllerName . '.controller.php';

if (file_exists($controllerPath)) {
    require $controllerPath;
    $action = !empty($_GET['action']) ? $_GET['action'] . 'Action' : 'indexAction';
    if (function_exists($action)) {
        $action();
    } else {
        require ROOT_PATH . 'controllers/error.controller.php';
        notFound(); // Action 404
    }
} else {
    require ROOT_PATH . 'controllers/error.controller.php';
    notFound(); // Action 404
}

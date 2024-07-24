<?php
require_once ROOT_PATH . 'models/product.manager.php';

function indexAction(): void
{
    $formations = getAllProducts();

    $cssFiles = [
        '/css/layout-style.css',
        '/css/index.css'
    ];
    $jsFiles = [
        '/js/modaldelete.js'
    ];

    $template = ROOT_PATH . 'views/index.html.php'; // Assurez-vous que ce chemin est correct
    if (file_exists($template)) {
        require ROOT_PATH . 'views/layouts/layout.html.php';
    } else {
        echo "Erreur : le fichier template spécifié n'existe pas. Chemin : " . htmlspecialchars($template, ENT_QUOTES, 'UTF-8');
    }
}

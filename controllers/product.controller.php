<?php

// Fonction pour afficher et ajouter une formation
function indexAction(): void
{
    require_once '../models/product.manager.php';

    $formations = getAllProducts();
    $cssFiles =
        [
            '/css/vars.css',
            '/css/modal.css',
            '/css/index.css',
            '/css/product.css'
        ];
    $jsFiles =
        [
            '/js/modal-delete-verify.js',
            '/js/formation.js'
        ];

    $template = "../views/index.html.php";
    require "../views/layouts/layout.html.php";
}

<?php

// gestion des erreurs
ini_set('display_errors','on');
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// on appel l'autoloading
require "vendor/autoload.php";

// on créé un objet $router
$router = new App\Router\Router($_GET['url']);

// exemple de route créé par le router
$router->get("/", function() { echo "Bonjour"; });

// $router->get("/posts/:id", function($id) { echo "Afficher l'article ".$id; });
$router->get("/articles", "Posts#show");

// on démarre l'application
$router->run();

<?php
require 'functions.php'; // include il file functions.php, che contiene le funzioni definite in esso, come dd() e altre funzioni utili.

$heading = 'Home'; /* Ogni variabile definita nel controllore è accessibile nella view */

require "views/index.view.php";



// il metodo parse_url analizza e divide la URL e restituisce un array associativo, da cui possiamo estrarre il path
/* 
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$route = [
    '/laracast-PHP/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/services' => 'controllers/services.php',
    
];

if (array_key_exists($uri, $route)) {
    require $route[$uri];
} else {
    http_response_code(404);
    require('views/404.php');
}
*/
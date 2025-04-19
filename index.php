
<?php

// echo 'bob';

require 'functions.php'; 

$uri = $_SERVER['REQUEST_URI'];

// dd($_SERVER);


if ($uri === '/Laracast-PHP/'){
    require 'controllers/index.php';
    } 
    else if ($uri === '/Laracast-PHP/about'){
        require 'controllers/about.php';
    } 
    else if ($uri === '/Laracast-PHP/contact'){
        require 'controllers/contact.php';
    };





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
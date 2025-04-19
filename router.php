<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// parse_url analizza e divide la URL e restituisce un array associativo, da cui possiamo estrarre il path, in modo che restituisca solo la uri e non l'intera stringa di query.
// $uri = $_SERVER['REQUEST_URI'];

// dd($uri);
// dd(parse_url($uri));


/* refactorizzato sotto e diventa: $routes/*
/*
if ($uri === '/Laracast-PHP/'){
    require 'controllers/index.php';
    } 
    else if ($uri === '/Laracast-PHP/about'){
        require 'controllers/about.php';
    } 
    else if ($uri === '/Laracast-PHP/contact'){
        require 'controllers/contact.php';
    };
*/

$routes = [
    '/Laracast-PHP/' => 'controllers/index.php',
    '/Laracast-PHP/about' => 'controllers/about.php',
    '/Laracast-PHP/contact' => 'controllers/contact.php',
];
// $routes è un array associativo che mappa le URL a file di controller specifici.



function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(); // bisognerebbe gestire anche gli altri errori, come 500, 403, ecc.
    }
}

function abort($code = 404){ 
    // la funzione abort() non restituisce un parametro, quindi abort viene già impostato con il valore 404, che è il codice di errore per "pagina non trovata".
    // se non viene passato un parametro, il valore predefinito è 404.
    // se viene passato un parametro, il valore predefinito viene sovrascritto con il valore passato.
    
    http_response_code($code);
    require"views/{$code}.php";
    die();

}

routeToController($uri, $routes);
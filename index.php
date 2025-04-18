<?php

$heading = 'Home'; /* Ogni variabile definita nel controllore è accessibile nella view */
require "views/index.view.php";


/*  var_dump() */
// echo "laracast-PHP/"; // esempio per testare il file index.php e visualizzare che la stringa "laracast-PHP/" viene visualizzata
/* var_dump([
    'test' => '🐘 PHP',
     'test_2' => 'PHP v.8']); // 🐘 PHP è una funzione di debug che mostra informazioni dettagliate su una variabile
*/
// var_dump() → è una funzione di debug
// 🔁 $_GET, $_POST, ecc. → sono superglobali



function dd($dd_value){ 
    // la funzione dd, che accetta un parametro, passa il parametro $dd_value a var_dump(), questo paramentro viene specificato quando in seguito alla dichiarazione della funzione , chiamo la funzione. es. dd(parametro_a_mia_scelta)
    // il tag <pre> serve per odrinare l'array in modo leggibile, perchè il parametro $_SERVER è un array associativo che contiene molti valori.

    echo "<pre>";
    var_dump($dd_value);
    echo "</pre>";

    die(); // termina l'esecuzione dello script e mostra il messaggio di debug, quindi non esegue tutto cioò che viene dopo.
}
// dd($_SERVER); 
// chiamo dd() e passo il parametro $_SERVER, che è una superglobale in PHP che mostra le informazioni relative alla richiesta HTTP corrente, al server e le variabili di ambiente.
// vedi file appunti_sviluppo_PHP.md per maggiori info su $_SERVER .


// echo $_SERVER['REQUEST_URI']; // mostra la stringa della richiesta corrente, che è la parte della URL dopo il dominio e la porta.
// quindi se la URL è laracast-PHP/about, $_SERVER['REQUEST_URI'] restituirà /about.



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
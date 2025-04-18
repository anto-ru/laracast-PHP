<?php
$heading = 'About Us';
require "views/about.view.php";


function dd($dd_value){ 
    // la funzione passa il parametro $dd_value a var_dump(), questo paramentro viene specificato quando chiamo la funzione 
    // dd(parametro_a_mia_scelta)

    echo "<pre>";
    var_dump($dd_value);
    echo "</pre>";

    die(); // termina l'esecuzione dello script e mostra il messaggio di debug, quindi non esegue il resto del codice.
}

    // echo $_SERVER['REQUEST_URI'];

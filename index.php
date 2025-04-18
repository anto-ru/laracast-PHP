<?php

$heading = 'Home'; /* Ogni variabile definita nel controllore è accessibile nella view */
require "views/index.view.php";




//echo "laracast-PHP/"; // per testare il file index.php e visualizzare che la stringa viene visualizzata
/* var_dump([
    'test' => '🐘 PHP',
     'test_2' => 'PHP v.8']); // 🐘 PHP è una funzione di debug che mostra informazioni dettagliate su una variabile
*/
// var_dump() → è una funzione di debug
// 🔁 $_GET, $_POST, ecc. → sono superglobali

function dd($dd_value){
echo "<pre>";
var_dump($dd_value);
echo "</pre>";
die(); // termina l'esecuzione dello script e mostra il messaggio di debug, quindi non esegue il resto del codice.
}
dd($_SERVER); // mostra tutte le informazioni relative alla richiesta HTTP corrente, inclusi i dati del server e le variabili di ambiente.
// $_SERVER['REQUEST_URI'] → contiene l'URI della richiesta corrente, che include il percorso e la query string
// $_SERVER['REQUEST_METHOD'] → contiene il metodo HTTP utilizzato per la richiesta (GET, POST, ecc.)
// $_SERVER['HTTP_HOST'] → contiene il nome host della richiesta corrente
// $_SERVER['HTTP_USER_AGENT'] → contiene informazioni sul browser e sul sistema operativo del client che ha effettuato la richiesta
// $_SERVER['REMOTE_ADDR'] → contiene l'indirizzo IP del client che ha effettuato la richiesta
// $_SERVER['SCRIPT_NAME'] → contiene il percorso del file PHP in esecuzione sul server
// $_SERVER['SERVER_NAME'] → contiene il nome del server su cui è in esecuzione lo script PHP
// $_SERVER['SERVER_PORT'] → contiene il numero di porta del server su cui è in esecuzione lo script PHP
// $_SERVER['SERVER_PROTOCOL'] → contiene il protocollo HTTP utilizzato per la richiesta corrente
// $_SERVER['REQUEST_TIME'] → contiene il timestamp della richiesta corrente
// $_SERVER['QUERY_STRING'] → contiene la query string della richiesta corrente, che include i parametri passati nell'URL
// $_SERVER['PHP_SELF'] → contiene il percorso del file PHP in esecuzione sul server, relativo alla root del server
// $_SERVER['DOCUMENT_ROOT'] → contiene il percorso della root del documento del server, che è la directory principale in cui sono memorizzati i file del sito web
// $_SERVER['SCRIPT_FILENAME'] → contiene il percorso completo del file PHP in esecuzione sul server
// $_SERVER['HTTP_REFERER'] → contiene l'URL della pagina da cui è stata effettuata la richiesta corrente
// $_SERVER['HTTP_ACCEPT'] → contiene le intestazioni HTTP che indicano i tipi di contenuto accettabili dal client
// $_SERVER['HTTP_ACCEPT_LANGUAGE'] → contiene le intestazioni HTTP che indicano le lingue accettabili dal client
// $_SERVER['HTTP_ACCEPT_ENCODING'] → contiene le intestazioni HTTP che indicano i tipi di codifica accettabili dal client
// $_SERVER['HTTP_CONNECTION'] → contiene le intestazioni HTTP che indicano se la connessione deve essere mantenuta aperta o chiusa
// $_SERVER['HTTP_COOKIE'] → contiene i cookie inviati dal client al server
// $_SERVER['HTTP_CACHE_CONTROL'] → contiene le intestazioni HTTP che indicano le direttive di caching del client
// $_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'] → contiene le intestazioni HTTP che indicano se il client supporta l'aggiornamento delle richieste non sicure a sicure
// $_SERVER['HTTP_X_FORWARDED_FOR'] → contiene l'indirizzo IP del client originale quando la richiesta passa attraverso un proxy
// $_SERVER['HTTP_X_FORWARDED_PROTO'] → contiene il protocollo originale (HTTP o HTTPS) quando la richiesta passa attraverso un proxy
// $_SERVER['HTTP_X_FORWARDED_HOST'] → contiene il nome host originale quando la richiesta passa attraverso un proxy
// $_SERVER['HTTP_X_FORWARDED_SERVER'] → contiene il nome del server originale quando la richiesta passa attraverso un proxy
// $_SERVER['HTTP_X_REQUESTED_WITH'] → contiene le intestazioni HTTP che indicano se la richiesta è stata effettuata tramite AJAX
// $_SERVER['HTTP_X_HTTP_METHOD_OVERRIDE'] → contiene le intestazioni HTTP che indicano se il metodo della richiesta è stato sovrascritto
// $_SERVER['HTTP_X_CSRF_TOKEN'] → contiene le intestazioni HTTP che indicano il token CSRF (Cross-Site Request Forgery) per la protezione dalle vulnerabilità di sicurezza
// $_SERVER['HTTP_X_FRAME_OPTIONS'] → contiene le intestazioni HTTP che indicano se la pagina può essere visualizzata all'interno di un iframe
// $_SERVER['HTTP_X_CONTENT_TYPE_OPTIONS'] → contiene le intestazioni HTTP che indicano se il browser deve rispettare il tipo di contenuto dichiarato
// $_SERVER['HTTP_X_XSS_PROTECTION'] → contiene le intestazioni HTTP che indicano se il browser deve attivare la protezione contro gli attacchi XSS (Cross-Site Scripting)
// $_SERVER['HTTP_X_DOWNLOAD_OPTIONS'] → contiene le intestazioni HTTP che indicano se il browser deve rispettare le opzioni di download
// $_SERVER['HTTP_X_PERMITTED_CROSS_DOMAIN_POLICIES'] → contiene le intestazioni HTTP che indicano se il browser deve rispettare le politiche di cross-domain
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti
// $_SERVER['HTTP_X_WEBKIT_CSP'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti per i browser WebKit
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only
// $_SERVER['HTTP_X_WEBKIT_CSP_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only per i browser WebKit
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only
// $_SERVER['HTTP_X_WEBKIT_CSP_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only per i browser WebKit
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only
// $_SERVER['HTTP_X_WEBKIT_CSP_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only per i browser WebKit
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only
// $_SERVER['HTTP_X_WEBKIT_CSP_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only per i browser WebKit
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only
// $_SERVER['HTTP_X_WEBKIT_CSP_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only per i browser WebKit
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only
// $_SERVER['HTTP_X_WEBKIT_CSP_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only per i browser WebKit
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only
// $_SERVER['HTTP_X_WEBKIT_CSP_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only per i browser WebKit
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only
// $_SERVER['HTTP_X_WEBKIT_CSP_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only per i browser WebKit
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only
// $_SERVER['HTTP_X_WEBKIT_CSP_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only per i browser WebKit
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only
// $_SERVER['HTTP_X_WEBKIT_CSP_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only per i browser WebKit
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only
// $_SERVER['HTTP_X_WEBKIT_CSP_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only per i browser WebKit
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only
// $_SERVER['HTTP_X_WEBKIT_CSP_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only per i browser WebKit
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only
// $_SERVER['HTTP_X_WEBKIT_CSP_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only per i browser WebKit
// $_SERVER['HTTP_X_CONTENT_SECURITY_POLICY_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only
// $_SERVER['HTTP_X_WEBKIT_CSP_REPORT_ONLY'] → contiene le intestazioni HTTP che indicano le politiche di sicurezza dei contenuti in modalità report-only per i browser WebKit



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
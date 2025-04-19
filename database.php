<?php

try {
    $pdo = new PDO("mysql:host=localhost;port=3306", "root", "root");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $pdo->query("SHOW DATABASES");
    $databases = $query->fetchAll(PDO::FETCH_COLUMN);

    echo "<pre>";
    print_r($databases);
    echo "</pre>";
} catch (PDOException $e) {
    die("Errore: " . $e->getMessage());
}


$dsn = "mysql:host=localhost;port=3306;dbname=local;charset=utf8mb4";
$username = "root";
$password = "root";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connessione riuscita!";
} catch (PDOException $e) {
    echo "Errore di connessione: " . $e->getMessage();
}

$statement = $pdo->prepare 
("SELECT USER();           
SELECT DATABASE();       
SHOW VARIABLES LIKE 'port';
SHOW TABLES;");

/*
$statement = $pdo->prepare 
("select * from articoli");
*/

$statement->execute();

$articoli = $statement->fetchAll(PDO::FETCH_ASSOC);

/*
foreach ($articoli as $articolo) {
    echo "<li>" . $articolo['titolo'] . "</li>";
}
*/

dd($articoli);
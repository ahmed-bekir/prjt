<?php
//definir des constantes de connexion à la base
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS','');
define ('DB_NAME','todo_app');

try{
//connexion à la base de donnée
$pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
//définir le fetch par défaut
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//traitement des exception
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "DB Connection Error: ". $e->getMessage();
    die();

}
?>
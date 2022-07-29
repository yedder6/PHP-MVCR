<?php
/*
* On indique que les chemins des fichiers qu'on inclut
* seront relatifs au répertoire src.
*/
set_include_path("./src");

/* Inclusion des classes utilisées dans ce fichier */
require_once("Router.php");

/*
* Cette page est simplement le point d'arrivée de l'internaute
* sur notre site. On se contente de créer un routeur
* et de lancer son main.
*/

$host = 'mysql.info.unicaen.fr';
$pass = 'johc1Rie8iekeequ';
$db_name = '21912359_1';
$user = '21912359';
try {
    $pdo = new PDO("mysql:host={$host};dbname={$db_name}", $user, $pass);
    //$storage= new ScientifiqueStorageFile('nom');

    $router = new Router();
    $router->main($pdo);
} catch (\Throwable $th) {
    echo $th;
}

?>

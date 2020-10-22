
<?php

include 'DBPDO.php';

echo 'Test de Conexión a la Base de Datos<br>';

$db = new DBPDO();

ECHO '<pre>';

print_r($usuario = new Usuario());


//print_r($db->getConnection());
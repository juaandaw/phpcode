<h1>Ejemplo de Conexion a Base de Datos</h1>
<?php

$host = 'mysql';
$dbname = 'proyecto11';
$user = 'homestead';
$password = 'secret';

$dsn = 'mysql:host=' . $host . ';dbname' . $dbname;

$opciones = array(PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_ERRMODE      =>PDO::ERRMODE_EXCEPTION);

try{
    $conexion = new PDO($dsn,$user,$password,$opciones);
    echo ' Correcto!!!! Estamos conectados a la BD';
    print_r($conexion);
}   catch (PDOException $e){

    echo 'Error en la conexion: ' . $e->getMessage();
}
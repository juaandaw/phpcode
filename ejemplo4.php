<?php

include 'Etiqueta.php';
include 'Enlace2.php';
include 'MIgasPan2.php';
include 'MigasPanContenedor.php';

$migas = new MigasPanContenedor('-','section');

$migas->agregarNodos('Home', 'http://www.iescierva.net',false);
$migas->agregarNodos('Noticias','http://www.iescierva.net/noticias');
$migas->agregarNodos('Noticias Academicas','http://www.iescierva.net/noticias/academicas');

echo $migas->mostrar();


<?php

include 'Enlace.php';
include 'MigasPan.php';

$migas = new MigasPan('  -> ');

$migas->agregarNodos('Home', 'http://www.iescierva.net',false);
$migas->agregarNodos('Noticias','http://www.iescierva.net/noticias');
$migas->agregarNodos('Noticias Academicas','http://www.iescierva.net/noticias/academicas');

echo $migas->mostrar();


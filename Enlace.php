<?php

class Enlace
{
    private $nombre="Mostrar enlace";

    public function mostrar(){

        echo '<h3>'. $this->nombre . '</h3>"';
        echo "<ul>";
        echo "<li><a href='ejemplo1.php'>Enlace Ejemplo</a></li>";
        echo "</ul>";
    }
}
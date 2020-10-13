<?php

class Freelance
{
    private $nombre;
    protected $ocupado;
    private $precioHora = 10;
    private $comienzoTrabajo;

    public function desarrolar()
    {
        echo '<br>Soy' . $this->nombre . 'y comienzo a trabajar';
        $this ->ocupado = true;
        $this ->comienzoTrabajo = time();
    }
    public function parar()
    {
        $this->ocupado=false;
        $horasTrabajadas = ceil(time()-$this->comienzoTrabajo/ 3600);

        echo 'He terminado de trabajar. Facturo' . ($horasTrabajadas * $this->precioHora);
    }
}
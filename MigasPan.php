<?php

class MigasPan
{
    private $separador;
    private $nodos = [];


    public function __construct($separador = '>')
    {
        $this->separador = $separador;
    }

    public function agregarNodos($texto,$ruta,$blanck = true)
    {
        $this->nodos [] = new Enlace($texto,$ruta,$blanck);
    }
    public function mostrar()
    {
        $salida = '';

        foreach($this->nodos as $key => $enlace) {
            $salida .= $enlace->mostrar();
            if($key != (count($this->nodos))-1){
                $salida .= $this->separador;
            }

        }

        return $salida;
    }
}
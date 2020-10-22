<?php

class MigasPanContenedor extends MigasPan2
{
    private $contenedor;

    public function __construct($separador,$contenedor)
    {
        parent::__construct($separador);
        $this->contenedor = new Etiqueta($contenedor);
    }

    public function mostrar()
    {
        return $this->contenedor->render(parent::mostrar());
    }
}
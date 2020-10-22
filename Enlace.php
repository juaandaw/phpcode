<?php

class Enlace extends Etiqueta
{
    public function __construct($texto,$url,$blanck = true)
    {
        parent::__construct('a',$texto,'href="' . $url . '"'
        . ($blanck ? 'target="_blanck"' : ''));
    }
}
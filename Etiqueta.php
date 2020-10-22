<?php

class Etiqueta
{
    private $tag;
    private $content;
    private $attributes;

    public function __construct($tag,$content = '',$attributes= '')
    {
        $this->tag = $tag;
        $this->content = $content;
        $this->attributes = $attributes;
    }

    public function render($content = null)
    {

        $salida = '<' . $this->tag . ' ' . $this->attributes . '>';
        if(is_null($content)) {
            $salida .= $this->content;
        } else {
            $salida .= $content;
        }
        $salida .= '</' . $this->tag . '>';

        return $salida;
    }
}
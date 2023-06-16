<?php

class constructor{

    public$id;
    public$direccion;
    public$metroscuadrados;
    public$ciudad;
    public$valor;
    public$PropiedadInmobiliaria;

    public function mostrardatos()
    {
        echo 'id' .$this->PropiedadInmobiliaria->id.'<br>';
        echo 'direccion' .$this->PropiedadInmobiliaria->direccion.'<br>';
        echo 'metros cuadrados' .$this->PropiedadInmobiliaria->metroscuadrados.'<br>';
        echo 'ciudad' .$this->PropiedadInmobiliaria->ciudad.'<br>';
        echo 'valor' .$this->PropiedadInmobiliaria->valor.'<br>';

    }
}
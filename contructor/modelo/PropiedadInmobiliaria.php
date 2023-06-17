<?php

class PropiedadInmobiliaria
{
    function __construct($id,$direccion,$metroscuadrados,$ciudad,$valor)
    {
        $this->Id=$id;
        $this->Direccion=$direccion;
        $this->Metroscuadrados=$metroscuadrados;
        $this->Ciudad=$ciudad;
        $this->Valor=$valor;

    }
    public $Id;
    public $Direccion;
    public $Metroscuadrados;
    public $Ciudad;
    public $Valor;

    public function mostrardatos()
    {
        
        echo 'id:'. $this->Id. '<br>';
        echo 'direccion:'. $this->Direccion. '<br>';
        echo 'metros cuadrados: '. $this->Metroscuadrados. '<br>';
        echo 'ciudad: '. $this->Ciudad. '<br>';
        echo 'valor:'. $this->Valor. '<br>';

    }

}
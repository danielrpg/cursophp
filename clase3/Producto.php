<?php

# declaro la clase
class Producto {
    #defino algunas propiedades
    public $nombre;
    public $precio;
    protected $estado;
    #defino el método set_estado_producto()
    protected function set_estado_producto($estado) {
        $this->estado = $estado;
    }
    # constructor de la clase
    function __construct() {
        $this->set_estado_producto('en uso');
    }
    # destructor de la clase
    function __destruct() {
        $this->set_estado_producto('liberado');
        print 'El objeto ha sido destruido';
    }
}
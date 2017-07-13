<?php

/**
 * Created by Dany.
 * User: dany
 * Date: 7/8/2017
 * Time: 8:33 PM
 */

#clase
class Persona {

    var $nombre = "Juan";
    var $apellido = "Flores";
    var $edad = "35 años";
    var $altura = "1.65 mts";

    function caminar(){
        echo "Caminar pasos para adelante>>>";
    }

    function darNombre(){
        return $this->nombre;
    }

}
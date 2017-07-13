<?php
include 'Usuario.php';
include 'Persona.php';

/**
 * Esta el archivo principal de php
 */

$usuario = new Usuario();

$usuario->set_usuario();

$dato = $usuario->get_usuario();

echo "Este es el dato -> ".$dato."<br>";

echo "====================================<br>";

$persona = new Persona();

$persona->caminar();

$nombre = $persona->darNombre();

echo "El nombre es -->".$nombre."<br>";

echo "====================================<br>";


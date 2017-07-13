<?php
include 'Persona.php';
include  'PersonaPositivo.php';

$persona_positivo = new PersonaPositivo();

echo "___________________________<br>";
echo $persona_positivo->nombre +"<br>";
echo "___________________________<br>";

echo "TIPO DE SANGRE<br>";
echo PersonaPositivo::$tipo_sangre;
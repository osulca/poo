<?php
include_once "Persona.php";

$persona = new Persona();
echo $persona->cambiarEmail();
echo $persona->getPi();
echo $persona::PI;

$clase = "Persona";
$persona2 = new $clase();
echo $persona2->cambiarEmail();
echo $persona2->getPI();
<?php
include_once "Persona.php";
include_once "Empleado.php";
include_once "Cliente.php";

/*echo Persona::cambiarTelefono();
echo Persona::PI;*/

$persona = new Persona("Omar", "omar3000@dasdasd.com", 999666777);
echo $persona->getEmail()."<br>";
echo $persona::PI."<br>";
echo $persona->cambiarEmail();
echo Persona::cambiarTelefono();

$empleado = new Empleado("Andrea", "ac@gmail.com", 999888777);
echo $empleado::cambiarTelefono();
$empleado->codigo = "SC1578";
echo $empleado->codigo."<br>";

$cliente = new Cliente("Miguel", "miguelito3@gmail.com", 958657123);
echo $cliente->cambiarEmail();
$cliente->tarjetaPago = "1245-1578-9874-1545";
echo $cliente->tarjetaPago;

// crear clases

/*$clase = "Persona";
$persona2 = new $clase();
echo $persona2->cambiarEmail();
echo $persona2->getPI();*/
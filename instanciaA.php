<?php
include_once "CuentaPersonal.php";
$cuenta1 =  new CuentaPersonal();
echo $cuenta1->depositar();
echo "<br>";
$cuenta1->retirar();
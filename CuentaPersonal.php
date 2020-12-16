<?php
include_once "CuentaBancariaA.php";
class CuentaPersonal extends CuentaBancariaA{

    public function depositar(): string
    {
        return "Usted ha depositado: ".$this->monto;
    }
}

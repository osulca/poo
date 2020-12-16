<?php
include_once "CuentaBancaria.php";
class CuentaEmpresarial extends Persona implements CuentaBancaria
{

    public function depositar(float $monto): string
    {
        return "monto depositado";
    }

    public function retirar(float $monto): void
    {
        echo "monto retirado";
    }

    public function generarIntereses(): int{
        return 24;
    }
}

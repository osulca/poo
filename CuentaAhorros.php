<?php
include_once "CuentaBancaria.php";
class CuentaAhorros implements CuentaBancaria
{
  public $montoCuenta = (float)2000;
  public function depositar(float $monto): string{
    $this->montoCuenta += $monto;
    echo "confirmacion deposito<br>
          nuevo saldo: $this->montoCuenta";
  }

  public function retirar(float $monto): void{
      $this->montoCuenta -= $monto;
    echo "confirmacion retiro<br>
          nuevo saldo: $this->montoCuenta";
  }

  // se utilizan las interfaces para obligarnos a establecer un comportamiento (metodos) determinado
}

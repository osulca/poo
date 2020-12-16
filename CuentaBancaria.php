<?php

interface CuentaBancaria
{
  public function depositar(float $monto): String;
  public function retirar(float $monto): void;
  public function otroRetiro(): void;
}

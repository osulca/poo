<?php

abstract class CuentaBancariaA{
    protected $monto;

    public function __construct()
    {
        $this->monto = 20000;
    }

    abstract protected function depositar();

    public function retirar(): void{
        echo "Retiro realizado";
    }
}

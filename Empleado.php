<?php
class Empleado extends Persona {
    public $codigo;

    public function __construct(string $nombre, string $email, int $telefono)
    {
        // parent::__construct($nombre, $email, $telefono);
        echo "del tipo empleado<br>";
    }
}

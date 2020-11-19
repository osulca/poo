<?php
class Persona{
    public $nombre;
    protected $email;
    private $telefono;
    const PI = 3.1416;

    function __construct(string $nombre, string $email, int $telefono)
    {
        echo "<b>Creando objeto persona</b><br>";
        $this->nombre = $nombre;
        $this->email = $email;
        $this->telefono = $telefono;
    }

/*    function __destruct()
    {
        echo "<b>Destruyendo objeto</b>";
    }*/

    function getPi(): float
    {
        return self::PI;
    }

    function getTelefono(): int
    {
        return $this->telefono;
    }

    function setTelefono(int $telefono): void
    {
        $this->telefono = $telefono;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    function cambiarEmail(): string{
        return "Cambiar email<br>";
    }

    static function cambiarTelefono(): string{
        return "Cambiar Telefono<br>";
    }
}

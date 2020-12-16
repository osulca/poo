<?php
class Cliente extends Persona {
    public $tarjetaPago;

    public function cambiarContraseña(String $contraseña): bool{
       if($contraseña!="123456"){
          return false;
      }
      else{
          return true;
      }
    }
}

// poliformismo ->
  //  clase Padre y clase hijo tienen funciones con el mismo nombre pero con comportamiento distinto
  // los argumentos o parametros tienen que ser del mismo tipo y el resultado (tipo de funcion)
  // la cantidad de arguments tiene que ser la misma cantidad del padre

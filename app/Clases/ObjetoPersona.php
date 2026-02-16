<?php

namespace App\Clases;

class ObjetoPersona{

    private $nombres;
    private $apellidos;
    private $cedula;
    private $telefono;
    private $direccion;

    public function __construct($nombres, $apellidos, $cedula, $telefono, $direccion) {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->cedula = $cedula;
        $this->telefono = $cedula;
        $this->direccion = $direccion;
    }

    public function datos() {
      return "Nombre del cliente :" . $this->nombres .  "<br> apellidos : " . $this->apellidos .  "<br> documento :" . $this->cedula .  "<br> numero de telefono :" . $this->telefono .  "<br> Residencia :" . $this->direccion;
    }

}

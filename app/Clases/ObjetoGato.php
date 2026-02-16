<?php

namespace App\Clases;

class ObjetoGato {

// Atributos de la clase
    private $nombre;
    private $color;
    private $raza;
    private $edad;

// Constructor de la clase, para recibir los atributos
    public function __construct($entradaNombre, $entradaColor, $entradaRaza, $entradaEdad) {
        $this->nombre = $entradaNombre;
        $this->color = $entradaColor;
        $this->raza = $entradaRaza;
        $this->edad = $entradaEdad;
    }

    // Funciòn para ejecutar la acciòn
    public function registrar() {
        return "Estoy registrando a " . $this->nombre . " de color " . $this->color .
        " y de raza " . $this->raza . " y su edad es de " . $this->edad;
    }
}

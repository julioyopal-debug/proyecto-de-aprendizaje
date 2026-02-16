<?php

namespace App\Clases;

class ObjetoOlvidarContrasena {

    private string $correo;
    private int $id;

    public function __construct(string $correo = "") {
        $this->correo = $correo;
        $this->id = rand(1, 999);
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo( string $correo) {
        $this->correo = $correo;
    }

    public function getId() {
        return $this->id;
    }

}

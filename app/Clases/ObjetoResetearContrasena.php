<?php

namespace App\Clases;

class ObjetoResetearContrasena {

    private string $codigo;
    private string $contrasena;
    private string $confirmarContrasena;
    private string $id;

    public function __construct(string $codigo,string $contrasena,string $confirmarContrasena) {
        $this->codigo = $codigo;
        $this->contasena = $contrasena;
        $this->confirmarContrasena = $confirmarContrasena;
        $this->id = rand (1,999);
    }

    public function getCodigo() {
        return $this->codigo;
    }

        public function setCodigo( string $codigo) {
            $this->codigo = $codigo;
    }

        public function getContrasena() {
        return $this->contrasena;
    }

       public function setContrasena( string $contrasena) {
             $this->contrasena = $contrasena;
    }


        public function getConfirmarContrasena() {
        return $this->confirmarContrasena;
    }
       public function setConfirmarContrasena( string $confirmarContrasena) {
            $this->confirmarContrasena = $confirmarContrasena;
    }

       public function getId() {
        return $this->id;
    }
}

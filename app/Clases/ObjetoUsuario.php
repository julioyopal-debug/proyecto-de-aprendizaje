<?php

namespace App\Clases;

class ObjetoUsuario {
    private int $id;
    private string $email;
    private string $contrasena;

    public function __construct(string $email, string $contrasena){
        $this->email = $email;
        $this->contrasena = $contrasena;
        //se asigna valor por defecto, no necesita setter, solo getter
        $this->id = rand(1, 999);
    }

    //getter obtener valor
    public function getEmail(): string {
        return $this->email;
    }

    //setter asignar valor
    public function setEmail(string $email): void {
        $this->email = $email;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function setContrasena(string $contrasena) {
        $this->contrasena = $contrasena;
    }

    // no neceista setter por que se asigna valor por defecto
    public function getId() {
        return $this->id;
    }
}

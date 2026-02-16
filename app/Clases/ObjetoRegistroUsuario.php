<?php

namespace App\Clases;

class ObjetoRegistroUsuario {
    private string $userEmail;
    private string $password;
    private string $name;
    private string $surname;
    private string $phone;
    private int $id;

    public function __construct(string $correo, string $contrasena,string $nombres,string $apellidos,string $telefono) {
        $this->userEmail = $correo;
        $this->password = $contrasena;
        $this->name = $nombres;
        $this->surname = $apellidos;
        $this->phone = $telefono;
        $this->id = rand(1, 999);
    }

    public function getCorreo() {
        return $this->userEmail;
    }

    public function setCorreo(string $correo) {
       $this->userEmail = $correo;
    }

    public function getContrasena() {
        return $this->password;
    }

    public function setContrasena(string $contrasena) {
       $this->password = $contrasena;
    }

    public function getNombre() {
        return $this->name;
    }

    public function setNombre(string $nombres) {
       $this->name = $nombres;
    }

    public function getApellido() {
        return $this->surname;
    }

    public function setApellido(string $apellidos) {
       $this->surname = $apellidos;;
    }

     public function getTelefono() {
        return $this->phone;
    }

     public function setTelefono(string $telefono) {
       $this->phone = $telefono;
    }

       public function getId() {
        return $this->id;
    }
}

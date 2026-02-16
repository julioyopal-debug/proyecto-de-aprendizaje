<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clases\ObjetoUsuario;
use App\Clases\ObjetoRegistroUsuario;
use App\Clases\ObjetoOlvidarContrasena;
use App\Clases\ObjetoResetearContrasena;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function login() {
        $usuario = new ObjetoUsuario("","");

        $usuario->setEmail("camilo@gmail.com");
        $usuario->setContrasena("password");

        $id = $usuario->getId();
        $email = $usuario->getEmail();
        $contrasena = $usuario->getContrasena();

        $mensaje = "Id: {$id} Email : {$email} Contraseña: {$contrasena}";

        return $mensaje;
    }

     public function registrarUsuario() {
        $usuario = new ObjetoRegistroUsuario("","","","","");

         $usuario->setCorreo("Cesar@gmail.com");
         $usuario->setContrasena("");
         $usuario->setNombre("Julio Cesar");
         $usuario->setApellido("Jaimes Camargo");
         $usuario->setTelefono("3209093130");

            $id = $usuario->getId();
            $correo = $usuario->getCorreo();
            $contrasena = $usuario->getContrasena();
            $nombres = $usuario->getNombre();
            $apellidos = $usuario->getApellido();
            $telefono = $usuario->getTelefono();

            $mensaje = "Id: {$id} Correo : {$correo} Contraseña: {$contrasena} Nombres: {$nombres} Apellidos : {$apellidos} Apellidos : {$telefono}";
            return $mensaje;
        }

    public function olvidarContrasena() {
        $recuperarContrasena = new ObjetoOlvidarContrasena ();

        $recuperarContrasena->setCorreo("juliocesar-999@gmail.com");

        $id = $recuperarContrasena->getId();
        $correo = $recuperarContrasena->getCorreo();

        $mensaje= "Id: {$id} Email : {$correo}";

        return $mensaje;
    }

    public function resetearContrasena() {
        $resetearPassword = new ObjetoResetearContrasena("","","");

        $resetearPassword->setCodigo("2854");
        $resetearPassword->setContrasena("htj7y");
        $resetearPassword->setConfirmarContrasena("htj7y");

        $id = $resetearPassword->getId();
        $codigo = $resetearPassword->getCodigo();
        $contrasena = $resetearPassword->getCodigo();
        $confirmarContrasena = $resetearPassword->getConfirmarContrasena();

        $mensaje= "Id: {$id} Contrasena : {$contrasena} Comfirmar contrasena {$confirmarContrasena }";

          return $mensaje;
    }
}


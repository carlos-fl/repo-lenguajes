<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function redirectProveedoresInicio() {
        return view('ProveedoresInicio');
    }

    public function redirectToForm() {
        return view('ProveedoresForm');
    }

    public function createProveedor(Request $req) {
        $Proveedor = new Proveedores();

        $nombre = $req->input('nombre');
        $fechaRegistro = $req->input('fecha');
        $telefono = $req->input('telefono');
        $correo = $req->input('correo');

        $Proveedor->nombre = $nombre;
        $Proveedor->fechaRegistro = $fechaRegistro;
        $Proveedor->telefono = $telefono;
        $Proveedor->correo = $correo;

        $Proveedor->save();

        return redirect()->route('proveedores.registro');
    }

    public function redirectToProveedoresRegistro() {
        $proveedores = Proveedores::all();
        return view('ProveedoresRegistros', compact('proveedores'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function redirectEmpleadoInicio() {
        return view('EmpleadoInicio');
    }

    public function redirectToForm() {
        return view('EmpleadoForm');
    }

    public function createEmpleado(Request $req) {
        $Empleado = new Empleado();

        $nombre = $req->input('nombre');
        $apellido = $req->input('apellido');
        $fecha = $req->input('fecha');
        $salario = $req->input('salario');

        $Empleado->nombre = $nombre;
        $Empleado->apellido = $apellido;
        $Empleado->fechaIngreso = $fecha;
        $Empleado->salario = $salario;
        $Empleado->save();

        return redirect()->route('empleados.registro');
    }

    public function redirectToEmpleadosRegistro() {
        $empleados = Empleado::all();
        return view('EmpleadosRegistros', compact('empleados'));
    }
}

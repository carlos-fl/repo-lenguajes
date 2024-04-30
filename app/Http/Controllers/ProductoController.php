<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function redirectProductoInicio() {
        return view('ProductoInicio');
    }

    public function redirectToForm() {
        return view('ProductoForm');
    }

    public function createProducto(Request $req) {
        $Producto = new Producto();

        $descripcion = $req->input('descripcion');
        $precio = $req->input('precio');
        $stock = $req->input('stock');
        $isv = $req->input('isv');

        $Producto->descripcion = $descripcion;
        $Producto->precio = $precio;
        $Producto->stock = $stock;
        if ($isv == 1) {
            $Producto->pagaIsv = true;
        } else {
            $Producto->pagaIsv = false;
        }

        $Producto->save();

        return redirect()->route('productos.registro');
    }

    public function redirectToProductosRegistro() {
        $productos = Producto::all();
        return view('ProductosRegistros', compact('productos'));
    }
}

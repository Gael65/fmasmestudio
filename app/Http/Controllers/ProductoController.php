<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();

        return view('dashboard', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('producto.createProducto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255', 'min:5'],
            'concepto' => ['required', 'string', 'max:255', 'min:5'],
            'descripcion' => ['required', 'string', 'min:5'],
            'servicio' => ['required', 'string', 'max:255', 'min:5'],
            'precio' => ['required', 'numeric', 'min:1']
        ]);

        // dd($request->all());

        $producto = new Producto();

        $producto->nombre = $request->nombre;
        $producto->concepto = $request->concepto;
        $producto->descripcion = $request->descripcion;
        $producto->servicio = $request->servicio;
        $producto->precio = $request->precio;
        
        $producto->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('producto.editProducto', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'max:255', 'min:5'],
            'concepto' => ['required', 'string', 'max:255', 'min:5'],
            'descripcion' => ['required', 'string', 'min:5'],
            'servicio' => ['required', 'string', 'max:255', 'min:5'],
            'precio' => ['required', 'numeric', 'min:1']
        ]);

        // dd($request->all());

        $producto->nombre = $request->nombre;
        $producto->concepto = $request->concepto;
        $producto->descripcion = $request->descripcion;
        $producto->servicio = $request->servicio;
        $producto->precio = $request->precio;
        
        $producto->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
        $producto->delete();
        return redirect('/');
    }
}

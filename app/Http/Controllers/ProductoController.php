<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        $categorias = Categoria::all();
        return view('producto.createProducto', compact('categorias'));
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
            'categoria_id' => ['required'],
            'precio' => ['required', 'numeric', 'min:1'],
            'imagenes' => ['required']
        ]);

        // dd($request->all());

        // recuperar imagenes
        $urls = [];

        foreach($request->file('imagenes') as $img) {
            array_push($urls, Storage::url($img->store('public/imagenes')));
        }
        
        $urls = json_encode($urls);

        $producto = new Producto();

        $producto->nombre = $request->nombre;
        $producto->concepto = $request->concepto;
        $producto->imagenes = $urls;
        $producto->descripcion = $request->descripcion;
        $producto->categoria_id = $request->categoria_id;
        $producto->precio = $request->precio;
        
        $producto->save();

        return redirect('/')->with('crear', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        $producto->users()->attach(Auth::id());
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('producto.editProducto', compact('producto', 'categorias'));
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
            'categoria_id' => ['required'],
            'precio' => ['required', 'numeric', 'min:1']
        ]);

        $producto->nombre = $request->nombre;
        $producto->concepto = $request->concepto;
        $producto->descripcion = $request->descripcion;
        $producto->categoria_id = $request->categoria_id;
        $producto->precio = $request->precio;
        
        
        // if (Auth::check()) {
        //     $producto->users()->attach(Auth::id());
        //     // dd($producto->users);

        //     // if(in_array(Auth::id(), $producto->users()->id)){
        //     //     $producto->users()->attach(Auth::id());
        //     // }
        // }
    
        $producto->save();
        return redirect('/')->with('editar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        // eliminar imagenes asociadas con el producto
        foreach (json_decode($producto->imagenes, true) as $img) {
            $url = str_replace('storage', 'public', $img);
            Storage::delete($url);
        }

        //eliminar producto
        $producto->delete();
        return redirect('/')->with('eliminar', 'ok');
    }
}
<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Producto1;
use Illuminate\Http\Request;

class Producto1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los productos desde el modelo
    $productos = Producto1::all();
    // Pasar los productos a la vista welcome
    return view('welcome', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validando los datos
        $datos = $request->validate([
        'nombre'=>['required','string','max:100'],
        'descripcion'=>['nullable','string','max=225'],
        'precio'=>['required','integer','min:1000'],
        'cantidad'=>['required','integer' , 'min:1'],
]);    
// Guardar datos en la DB
        $producto = Producto1::create($datos);
 //Respuesta al usuario
        return response()->json([
        'success'=> true,
        'message'=>'Producto creado exitosamente',
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto1 $producto1)
    {
        //
        return response()->json(Producto1::all(),200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto1 $producto1)
    {
         // Validar datos
        $datos = $request->validate([
        'nombre'=>['required','string','max:100'],
        'descripcion'=>['nullable','string','max=225'],
        'precio'=>['required','integer','min:1000'],
        'cantidad'=>['required','integer' , 'min:1'],
        ]);    
         // Guardar datos en la DB
        $producto = Producto1::update($datos);
        //Respuesta al usuario
        return response()->json([
        'success'=> true,
        'message'=>'Producto Actualizado exitosamente',
        ], 200); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto1 $producto1)
    {
    //Eliminar el producto
        $producto1->delete();
    //Respuesta al usuario
        return response()->json([
        'success'=> true,
        'message'=> 'Producto eliminado exitosamente',
        ],200);
}

}
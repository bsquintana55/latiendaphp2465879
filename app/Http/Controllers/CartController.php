<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mostrar la variable de sesion 'cart'
       return view('cart.index') ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //estructurar la informacion del producto en un arreglo
        $producto =[
            [
                "nombre"=> $request->prod_nom,
                "id"=> $request->prod_id,
                "cantidad"=> $request->cantidad,
                "precio"=> $request->precio
            ]
        ];
        if( !session('cart') ){
            //no existe la variable de session 
           //crear el estado de sesion 'cart'
           $auxiliar[]=$producto;
           session(['cart'=> $auxiliar]);
        }else{
            //existe la variable de session 
            //extraer ell contido de la variable session'cart'
            $auxiliar = session('cart');
            //agregar el nuevo item 
            $auxiliar[]=$producto;
            //volver a crear la variable de sesion 'cart' con el contenido añadido 
            session(['cart' => $auxiliar ]); 

        }
        //redireccionar al catalogo de productos 
        //mensaje de exito 

        return redirect('productos')
        ->with('mensajito', 'Producto añadido al carrito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar la session 'cart'
        session()->forget('cart');
        return redirect('cart')
        ->with('mensaje', "carrito eliminado");

    }
}

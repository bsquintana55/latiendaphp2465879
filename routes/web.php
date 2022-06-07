<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//rutas de paises 
Route::get('paises',function(){
    $paises=[
    "colombia" =>["capital" => "Bogota",
                 "moneda" => "peso",
                 "poblacion" => 51.6,
                 "ciudades" => [
                    "Medellin",  
                    "Cali",
                    "Barranquilla"
    ]],
     "Peru" => ["capital" => "Lima",
                "moneda" => "sol",
                "poblacion" =>32.97, 
                "ciudades" => [
                    "Cusco",  
                    "Arequipa",
                    "Trujillo"
    ]], 
     "Paraguay" =>["capital" => "Asunsion",
                  "moneda" => "guanani paraguayo",
                  "poblacion" => 7.13, 
                 "ciudades" => [
                    "Encamacion",  
                    "Paraguari",
                    "Villarica"
    ]]
];

//mostrar la vista de paises
return view ('paises')->with("paises", $paises);




});
route::get('prueba', function(){
  return view('productos.new');
});

//rutas REST
//Producto

Route::resource('productos', 
ProductoController::class);

Route::resource('cart',
CartController::class,[ 'only' =>['store','destroy','index']]);

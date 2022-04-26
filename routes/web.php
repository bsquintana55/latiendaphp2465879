<?php

use Illuminate\Support\Facades\Route;

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
                    "villarica"
    ]]
];

//mostrar la vista de paises
return view ('paises')->with("paises", $paises);




});
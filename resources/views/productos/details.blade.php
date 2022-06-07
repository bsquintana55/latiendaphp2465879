@extends('layouts.menu')

@section('contenido')
<div class="row">
    <h1>{{$producto->nombre}} </h1>
</div>

<div class="row">
    <div class="col s8">
        <h3>Marca: {{ $producto->marca->nombre }} </h3>
        <ul>
            <li>Precio: US{{$producto->precio}}</li>
        </ul>
    </div>
    <div class="col s4">
        <div class="row">
            <h3>Añadir al carrito </h3>
        </div>
        <div class="row">
            <form action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col s4 input-field">
                        <select name="cantidad" id="cantidad">
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>  
                        </select>
                        <label for="cantidad">Cantidad</label>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
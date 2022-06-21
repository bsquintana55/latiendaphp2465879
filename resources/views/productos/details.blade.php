@extends('layouts.menu')

@section('contenido')
<div class="row">
    <h1>{{$producto->nombre}} </h1>
</div>

<div class="col s12">
    <div class="card-image waves-effect waves-block waves-light">
    @if($producto->imagen === null){
                <img src="{{ asset( 'img/nodisponible.png' )}}" alt="" >
            }
            @else
            <img src="{{ asset('img/'.$producto->imagen) }}"width="400" height="400"
             alt="">
            @endif
    </div>
  </div>


<div class="row">
    <div class="col s8">
        <h3>Marca: {{ $producto->marca->nombre }} </h3>
        <ul>

            <li>Precio: US {{$producto->precio}}</li>
            <li>Descripcion: {{$producto->desc}}</li>
        </ul>
    </div>
    <div class="col s4">
        <div class="row">
            <h3>Añadir al carrito </h3>
        </div>
        <div class="row">
            <form action="{{route('cart.store') }}" method="POST">
                @csrf


                <input type="hidden" name="prod_id"
                value="{{$producto->id }}">

                <input type="hidden" name="prod_nom"
                value="{{$producto->nombre }}">

                
                <input type="hidden" name="precio"
                value="{{$producto->precio }}">

                <div class="row">
                    <div class="col s4 input-field">
                        <select name="cantidad" id="cantidad">
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>  
                        </select>
                        <label for="cantidad">Cantidad</label>
                    </div>
                    <div>


                        <button class="btn waves-effect waves-light" type="submit" name="action">añadir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
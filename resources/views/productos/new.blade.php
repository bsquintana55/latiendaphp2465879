@extends('layouts.menu')
@section('contenido')
@if(session('mensaje'))
<div class="row">
     {{  session('mensaje')  }}
</div>
 @endif

 <div class="row">
  <h1 class=" blue-text text-lighten-1">NUEVO PRODUCTO
  </h1>

  </div>

  <div class="row">
      <form class='col s8'
         method="POST"
         action="{{ route('productos.store')}}">
         @csrf
         <div class="row">
          <div class="input-field col s8">
          <input  placeholder="Nombre de producto"
                 id="nombre" 
                 type="text" 
                 name="nombre"
                 value="{{ old('nombre')}}">
                 
                 <label for="nombre">Nombre del Poducto</label>
                <span>{{ $errors->first('nombre') }}</span>
          </div>
          <div class="row">
          <div class="input-field col s8">
                 <textarea name="desc" id="desc"  value="{{ old('desc')}}"  class="materialize-textarea"></textarea>
                 <label for="desc">Descripción</label>
                 <span>{{ $errors->first('desc') }}</span>
          </div>
      </div>
      <div class="row">
      <div class="input-field col s8">
          <input placeholder="Precio del producto"
          type="text"
          id="precio"
          name="precio"
          value="{{ old('precio')}}"
          />
          <label for="precio">Precio</label>
          <span>{{ $errors->first('precio') }}</span>
          </div>
      </div>

      <div class="row">
        <dv class="col s8 input-field">
           <select name="marca" id="marca" value="{{ old('marca')}}">
           <option value="">elija marca</option>
       @foreach($marcas as $marca)
            <option value="{{ $marca->id}}">{{ $marca->nombre}}</option>
       @endforeach
           </select>
           <label for="marca">Marca</label>
           <span>{{ $errors->first('marca') }}</span>
        </dv>
      </div>

      <div class="row">
        <dv class="col s8 input-field">
           <select name="categoria" id="categoria" value="{{ old('categoria')}}">
               <option value="">elija categoria</option>
       @foreach($categorias as $categoria)
            <option value="{{ $categoria->id}}">{{ $categoria->nombre}}</option>
       @endforeach 
           </select>
           <label for="categoria">Categoria</label>
           <span>{{ $errors->first('categoria') }}</span>
        </dv>
      </div>
      


      
  <div class="row">
            <div class="file-field input-field">
                <div class="btn #90caf9 blue lighten-3">
                    <span>Imagen ...</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
        </div>
        <div class="row">
            <button class="btn waves -effect waves-light #64b5f6 blue lighten-2" type="submit" name="action">Guardar</button>
        </div>
    </form>
</div>
  @endsection


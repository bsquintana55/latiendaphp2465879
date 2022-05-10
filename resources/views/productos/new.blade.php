@extends('layouts.menu')
@section('contenido')
 
 <div class="row">

  <h1 class=" blue-text text-lighten-1">NUEVO PRODUCTO
  </h1>

  </div>

  <div class="row">
      <form class='col s8'
         method="POST"
         action=""
      ><div class="row">
          <div class="input-field col s8">
          <input  placeholder="Nombre de producto"
                 id="nombre" 
                 type="text" 
                 name="nombre">
                 <label for="nombre">Nombre del Poducto</label>
          </div>
          <div class="row">
          <div class="input-field col s8">
                 <textarea name="desc" id="desc"  class="materialize-textarea"></textarea>
                 <label for="desc">Descripción</label>
          </div>
      </div>
      <div class="row">
      <div class="input-field col s8">
          <input placeholder="Precio del producto"
          type="text"
          id="precio"
          name="precio"
          />
          <label for="precio">Precio</label>
          </div>
      </div>
      <div class="row">
      <div class="file-field input-field col s8">
          <div class="btn #90caf9 blue lighten-3">
        <span>Imagen del producto...</span>
        <input type="file" name="imagen">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
      <div class="row">

      <button class="btn waves-effect waves-light #64b5f6 blue lighten-2" type="submit" name="action">Guardar
</div>
  </button><br>
    </div>
    </div>
    </form>

</div>
  @endsection
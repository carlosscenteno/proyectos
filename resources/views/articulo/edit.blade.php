@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">id</label>
    <input id="id" name="id" type="number" class="form-control" value="{{$articulo->id}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">distribuidores</label>
    <input id="distribuidores" name="distribuidores" type="text" class="form-control" value="{{$articulo->distribuidores}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">existencia</label>
    <input id="existencia" name="existencia" type="text" class="form-control" value="{{$articulo->existencia}}">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}">
  </div>
  
  <a href="/articulos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection

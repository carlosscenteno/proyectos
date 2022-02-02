@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/pedidos/{{$pedido->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">id</label>
    <input id="id" name="id" type="number" class="form-control" value="{{$pedido->id}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">fecha</label>
    <input id="fecha" name="fecha" type="datetime-local" class="form-control" value="{{$pedido->fecha}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$pedido->descripcion}}">
  </div>
  
  
  <a href="/pedidos" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection

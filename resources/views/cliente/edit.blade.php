@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/clientes/{{$cliente->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">id</label>
    <input id="id" name="id" type="number" class="form-control" value="{{$cliente->id}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" value="{{$cliente->nombre}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">apellido</label>
    <input id="apellido" name="apellido" type="text" class="form-control" value="{{$cliente->apellido}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">direccion</label>
    <input id="direccion" name="direccion" type="text" step="any" class="form-control" value="{{$cliente->direccion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">saldo</label>
    <input id="saldo" name="saldo" type="number" step="any" class="form-control" value="{{$cliente->saldo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">limite credito</label>
    <input id="limitecredito" name="limitecredito" type="number" step="any" class="form-control" value="{{$cliente->limitecredito}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">descuento</label>
    <input id="descuento" name="descuento" type="number" step="any" class="form-control" value="{{$cliente->descuento}}">
  </div>
  <a href="/clientes" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection

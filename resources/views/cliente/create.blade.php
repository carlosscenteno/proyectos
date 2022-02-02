@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="/clientes" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="id" name="id" type="number" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">apellido</label>
    <input id="apellido" name="apellido" type="text" class="form-control" tabindex="3" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">direccion</label>
    <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">saldo</label>
    <input id="saldo" name="saldo" type="number" step="any" value="0.00" class="form-control" tabindex="3" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">limite credito</label>
    <input id="limitecredito" name="limitecredito" type="number" step="any" value="0.00" class="form-control" tabindex="3" required>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descuento</label>
    <input id="descuento" name="descuento" type="number" step="any" value="0.00" class="form-control" tabindex="3" required>
  </div>
  <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
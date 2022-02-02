@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="clientes/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Direccion</th>
      <th scope="col">Saldo</th>
      <th scope="col">Limite</th>
      <th scope="col">Descuento</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($clientes as $cliente)
    <tr>
        <td>{{$cliente->id}}</td>
        <td>{{$cliente->nombre}}</td>
        <td>{{$cliente->apellido}}</td>
        <td>{{$cliente->direccion}}</td>
        <td>{{$cliente->saldo}}</td>
        <td>{{$cliente->limitecredito}}</td>
        <td>{{$cliente->descuento}}</td>
        <td>
         <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
          <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-info">Editar</a>         
              @csrf
              @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
         </form>          
        </td>        
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

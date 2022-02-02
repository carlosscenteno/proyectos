@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="pedidos/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Fecha</th>
      <th scope="col">descripcion</th>
      <th scope="col">codigo cliente</th>
      <th scope="col">nombre cliente</th>
      <th scope="col">accion</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($pedidos as $pedido)
    <tr>
        <td>{{$pedido->id}}</td>
        <td>{{$pedido->fecha}}</td>
        <td>{{$pedido->descripcion}}</td>
        <td>{{$pedido->cliente->id}}</td>
        <td>{{$pedido->cliente->nombre}}</td>
        <td>
         <form action="{{ route('pedidos.destroy',$pedido->id) }}" method="POST">
          <a href="/pedidos/{{$pedido->id}}/edit" class="btn btn-info">Editar</a>         
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

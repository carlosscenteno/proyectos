@extends('layouts.plantillabase')

@section('contenido')
<!-- <div class="shadow-lg p-3 mb-5 bg-white rounded"><h3>Contenido de INDEX</h3></div> -->
<a href="articulos/create" class="btn btn-primary">CREAR</a>


<table class="table table-dark table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">distribuidores</th>
      <th scope="col">existencia</th>
      <th scope="col">descripcion</th>
      <th scope="col">codigo pedido</th>
      <th scope="col">fecha pedido</th>
      <th scope="col">accion</th>
    </tr>
  </thead>
  <tbody>    
    @foreach ($articulos as $articulo)
    <tr>
        <td>{{$articulo->id}}</td>
        <td>{{$articulo->distribuidores}}</td>
        <td>{{$articulo->existencia}}</td>
        <td>{{$articulo->descripcion}}</td>
        <td>{{$articulo->pedido->id}}</td>
        <td>{{$articulo->pedido->fecha}}</td>
        <td>
         <form action="{{ route('articulos.destroy',$articulo->id) }}" method="POST">
          <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>         
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

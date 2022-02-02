<div id="ListadoCliente" class="modal" role="dialog" style="overflow-y: scroll;" >
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="moda-tittle">Escoger Cliente </h4>
</div>

<div class="modal-body">
<table id="tabla_clientes" class="table table-bordered table-hover">
<thead>
<tr>
<th>Codigo Cliente</th>
<th>nombre</th>
<th>apellido</th>
<th>Seleccionar </th>
</tr>
</thead>
<tbody>

@foreach($clientes as $cliente)
<tr>
<td>{{$cliente->id}}</td>
<td>{{$cliente->nombre}}</td>
<td>{{$cliente->apellido}}</td>
<td class="text-center">
<a href="#" data-dismiss="modal" class="btn btn-info btn-sm"> Escoger</a>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
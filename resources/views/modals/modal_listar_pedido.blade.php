<div id="ListadoPedido" class="modal" role="dialog" style="overflow-y: scroll;" >
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="moda-tittle">Escoger Pedido </h4>
</div>

<div class="modal-body">
<table id="tabla_pedidos" class="table table-bordered table-hover">
<thead>
<tr>
<th>Codigo Pedido</th>
<th>fecha</th>
<th>Seleccionar </th>
</tr>
</thead>
<tbody>

@foreach($pedidos as $pedido)
<tr>
<td>{{$pedido->id}}</td>
<td>{{$pedido->fecha}}</td>
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
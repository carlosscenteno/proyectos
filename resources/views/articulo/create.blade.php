@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="/articulos" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="id" name="id" type="number" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">distribuidores</label>
    <input type="text" class="form-control" id="distribuidores" name="distribuidores" required >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">existencia</label>
    <input id="existencia" name="existencia" type="text" class="form-control" tabindex="3" required>
  </div>

  <div class="mb-3">
    <label for="" class="form-label">descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3" required>
  </div>
  
  <div class="col-md-4">
                    <div class="form-group" data-toggle="modal" data-target="#ListadoPedido">
                        <label for="pedido_id"> Codigo Pedido </label>
                        <input type="number" class="form-control" id="pedido_id" name="pedido_id" autocomplete="off" readonly="readonly" required>
                    </div>
                </div>
                <br>
  <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@include('modals.modal_listar_pedido')
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $("#tabla_pedidos").DataTable();
      

        $("#tabla_pedidos").on('click', 'tr', function (event){

            pedido_id = $(this).find('td:first').html();
            $('#pedido_id').val(pedido_id);
            
        });

    });
        
</script>
@endsection
@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="/pedidos" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Código</label>
    <input id="id" name="id" type="number" class="form-control" tabindex="1" required>    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">fecha</label>
    <input type="datetime-local" class="form-control" id="fecha" name="fecha" required >
  </div>
  <div class="mb-3">
    <label for="" class="form-label">descripcion</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="3" required>
  </div>
  
  <div class="col-md-4">
                    <div class="form-group" data-toggle="modal" data-target="#ListadoCliente">
                        <label for="cliente_id"> Codigo Cliente </label>
                        <input type="number" class="form-control" id="cliente_id" name="cliente_id" autocomplete="off" readonly="readonly" required>
                    </div>
                </div>
                <br>
  <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@include('modals.modal_listar_cliente')
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $("#tabla_clientes").DataTable();
      

        $("#tabla_clientes").on('click', 'tr', function (event){

            cliente_id = $(this).find('td:first').html();
            $('#cliente_id').val(cliente_id);
            
        });

    });
        
</script>
@endsection
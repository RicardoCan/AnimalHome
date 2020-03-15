@extends('layouts.administrador')
@section('titulo','Medicamentos')
@section('contenido')

<div id="medicamento" class="container">

  <div class="container">
    <div class="row">
     <div>

      <button class="btn btn-md btn-warning" data-toggle="modal" data-target="#agregar">Agregar</button>

      <br>
      <br>

       <div class="row">
        <div class="col-xs-12 col-xs-12">

            <input type="text" placeholder="Buscar Por Medicamento" v-model="buscar" class="form-control">

            <br>

            <div class="table-responsive">
            <table class="table">
              <thead style="background-color:#039c77">
              <th><center>Medicamento</center></th>
              <th><center>Especie</center></th>
              <th><center>Descripcion</center></th>
              <th><center>Opciones</center></th>
            </thead>
            <tbody>
              <tr v-for="(medicamento,index) in filtroMedicamento">
                <td><center>@{{medicamento.id_medicamento}}</center></td>
                <td><center>@{{medicamento.tipo_animal}}</center></td>
                <td><center>@{{medicamento.utilidad}}</center></td>
                
                <td>
                 <center><span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" data-toggle="modal" data-target="#editarMedicamento" v-on:click="guardarMedicamento(medicamento.id_medicamento)"></span>

                  <span class="glyphicon glyphicon-trash btn btn-xs btn-danger" v-on:click="eliminarMedicamento(medicamento.id_medicamento)"></span></center>

               </td>
              </tr>
            </tbody>
          </table>
          </div>
          
        </div>
        
      </div>      

                    <!-- Modal Agregar -->
    <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header"  style="background-color:#039c77">
            <!-- <center><h4 class="modal-title" id="exampleModalLabel"><strong class="color">Agregar</strong></h4></center> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          
          <div class="row">
            <div class="col-xs-12">

              <label>Medicamento</label>
              <input type="text" name="Medicamento" class="form-control" v-model="id_medicamento" placeholder="Medicamento"><br>

              <label>Animal</label>
              <input type="text" name="Animal" class="form-control" v-model="tipo_animal" placeholder="Animal"><br>

              <label>Descripción</label>
              <input type="text" name="Descripción" class="form-control" v-model="utilidad" placeholder="Descripción"><br>

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="agregarMedicamento(id_medicamento)">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de modal -->

    <!-- Modal Editar -->
    <div class="modal fade" id="editarMedicamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header"  style="background-color:#039c77">
            <!-- <center><h4 class="modal-title" id="exampleModalLabel"><strong class="color">Editar</strong></h4></center> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          
          <div class="row">
            <div class="col-xs-12">
              
              <label>Medicamento</label>
              <input type="text" disabled="" name="Medicamento" class="form-control" v-model="id_medicamento"><br>

              <label>Animal</label>
              <input type="text" name="Animal" class="form-control" v-model="tipo_animal"><br>

              <label>Descripción</label>
              <input type="text" name="Descripción" class="form-control" v-model="utilidad"><br>

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="actualizarMedicamento(id_medicamento)">Guardar cambios</button>
           </div>
        </div>
      </div>
    </div>
    <!-- Fin de modal -->
  </div>
</div>

@endsection

@push('scripts')

<script src="js/vue-resource.js"></script>
<script src="js/medicamentos/medicamento.js"></script>
<!-- <script src="js/vue.js"></script> -->

@endpush

<input type="hidden" name="route" value="{{url('/')}}">
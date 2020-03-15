@extends('layouts.administrador')
@section('titulo','Hospitalización')
@section('contenido')

<div id="hospital" class="container">

     <div class="container"> 
       <div class="row">
        <div class="col-xs-12">

          <button class="btn btn-md btn-warning" data-toggle="modal" data-target="#agregar">Agregar</button>
          <button class="btn btn-md btn-info">PDF</button>

          <br>
          <br>
        
          <div class="row">
            <div class="col-xs-12 col-xs-12">

            <input type="text" placeholder="Buscar Por Propietario" v-model="buscar" class="form-control">

            <br>

            <div class="table-responsive">
            <table class="table">
              <thead style="background-color:#039c77">
              <th><center>No.</center></th>
              <th><center>Propietario</center></th>
              <th><center>Mascota</center></th>
              <th><center>Causa</center></th>
              <th><center>Hora Entrada</center></th>
              <th><center>Hora Salida</center></th>
              <th><center>Dia</center></th>
              <th><center>Opciones</center></th>
            </thead>
            <tbody>
              <tr v-for="(hospitalizacion,index) in filtroHospital">
                <td><center>@{{hospitalizacion.id_posicion}}</center></td>
                <td><center>@{{hospitalizacion.nombre_dueño}}</center></td>
                <td><center>@{{hospitalizacion.nombre_mascota}}</center></td>
                <td><center>@{{hospitalizacion.causa}}</center></td>
                <td><center>@{{hospitalizacion.hora_entrada}}</center></td>
                <td><center>@{{hospitalizacion.hora_salida}}</center></td>
                <td><center>@{{hospitalizacion.estatus}}</center></td>
                
                <td>
                 <center><span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" data-toggle="modal" data-target="#editarHospitalizacion" v-on:click="guardarHospitalizacion(hospitalizacion.id_posicion)"></span>

                  <span class="glyphicon glyphicon-trash btn btn-xs btn-danger" v-on:click="eliminarHospitalizacion(hospitalizacion.id_posicion)"></span></center>

                </td>
              </tr>
            </tbody>
          </table>
          </div>
          
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
              

              <label>Nombre Dueño</label>
              <input type="text" name="Nombre Dueño" class="form-control" v-model="nombre_dueño" placeholder="Nombre Dueño"><br>

              <label>Nombre Mascota</label>
              <input type="text" name="Nombre Mascota" class="form-control" v-model="nombre_mascota" placeholder="Nombre Mascota"><br>
              
              <label>Causas</label>
              <input type="text" name="Causas" class="form-control" v-model="causa" placeholder="Causas"><br>

              <label>Hora Entrada</label>
              <input type="time" name="Hora Entrada" class="form-control" v-model="hora_entrada"><br>

              <label>Hora Salida</label>
              <input type="time" name="Hora Salida" class="form-control" v-model="hora_salida" placeholder="Hora Salida"><br>

              <label>Estatus</label>
              <input type="text" name="Estatus" class="form-control" v-model="estatus" placeholder="Estatus"><br>

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="agregarHospitalizacion(id_posicion)">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de modal -->

    <!-- Modal Editar -->
    <div class="modal fade" id="editarHospitalizacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              
            <label>Nombre Dueño</label>
              <input type="text" name="Nombre Dueño" class="form-control" v-model="nombre_dueño" placeholder="Nombre Dueño"><br>

              <label>Nombre Mascota</label>
              <input type="text" name="Nombre Mascota" class="form-control" v-model="nombre_mascota" placeholder="Nombre Mascota"><br>
              
              <label>Causas</label>
              <input type="text" name="Causas" class="form-control" v-model="causa" placeholder="Causas"><br>

              <label>Hora Entrada</label>
              <input type="time" name="Hora Entrada" class="form-control" v-model="hora_entrada"><br>

              <label>Hora Salida</label>
              <input type="time" name="Hora Salida" class="form-control" v-model="hora_salida" placeholder="Hora Salida"><br>

              <label>Estatus</label>
              <input type="text" name="Estatus" class="form-control" v-model="estatus" placeholder="Estatus"><br>

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="actualizarHospitalizacion(id_posicion)">Guardar cambios</button>
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
<script src="js/hospitalizaciones/hospitalizacion.js"></script>
<!-- <script src="js/vue.js"></script> -->

@endpush

<input type="hidden" name="route" value="{{url('/')}}">
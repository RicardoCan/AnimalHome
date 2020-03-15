@extends('layouts.usuario')
@section('titulo','Vacuna')
@section('contenido')

<div id="vacuna" class="container">

     <div class="container"> 
       <div class="row">
        <div class="col-xs-12">

        <!--   <input type="text" placeholder="Buscar" v-model="buscar" class="form-control">

          <br> -->

          <button class="btn btn-md btn-warning" data-toggle="modal" data-target="#agregar">Agregar</button>
          <button class="btn btn-md btn-success">PDF</button>
        

          <br>
          <br>

          <div class="row">
            <div class="col-xs-12 col-xs-12">

            <div class="table-responsive">
            <table class="table table-sm">
              <thead style="background-color:yellow">
              <th><center>No.</center></th>
              <th><center>Nombre Mascota</center></th>
              <th><center>Dueño</center></th>
              <th><center>Apellidos</center></th>
              <th><center>Fecha Programada</center></th>
              <th><center>Hora Registro</center></th>
              <th><center>Opciones</center></th>
            </thead>
            <tbody style="color: white">
              <tr v-for="vacuna in vacunas">
                <td><center>@{{vacuna.id_vacuna}}</center></td>
                <td><center>@{{vacuna.nombre_mascota}}</center></td>
                <td><center>@{{vacuna.nombres_dueño}}</center></td>
                <td><center>@{{vacuna.apellidos_dueño}}</center></td>
                <td><center>@{{vacuna.fecha_programada}}</center></td>
                <td><center>@{{vacuna.hora_registro}}</center></td>
                
                <td>
                 <center><span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" data-toggle="modal" data-target="#editarVacuna" v-on:click="guardarVacuna(vacuna.id_vacuna)"></span>

                  <span class="glyphicon glyphicon-trash btn btn-xs btn-danger" v-on:click="eliminarVacuna(vacuna.id_vacuna)"></span></center>

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
          <div class="modal-header"  style="background-color:yellow">
           <!--  <center><h4 class="modal-title" id="exampleModalLabel"><strong class="color">Agregar</strong></h4></center> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          
          <div class="row">
            <div class="col-xs-12">

              <label>Nombre Mascota</label>
              <input type="text" name="Nombre Mascota" class="form-control" v-model="nombre_mascota" placeholder="Nombre Mascota"><br>

              <label>Nombres</label>
              <input type="text" name="Dueño" class="form-control" v-model="nombres_dueño" placeholder="Nombres"><br>

              <label>Apellidos</label>
              <input type="text" name="Apellidos Dueño" class="form-control" v-model="apellidos_dueño" placeholder="Apellidos"><br>

              <label>Fecha Programada</label>
              <input type="date" name="Fecha Programada" class="form-control" v-model="fecha_programada"><br>

              <label>Hora De Registro</label>
              <input type="time" name="Hora De Registro" class="form-control" v-model="hora_registro" placeholder="Hora De Registro"><br>

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="agregarVacuna(id_vacuna)">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de modal -->

    <!-- Modal Editar -->
    <div class="modal fade" id="editarVacuna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header"  style="background-color:orange ">
            <!-- <center><h4 class="modal-title" id="exampleModalLabel"><strong class="color">Editar</strong></h4></center> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          
          <div class="row">
            <div class="col-xs-12">

              <label>Nombre Mascota</label>
              <input type="text" name="" class="form-control" v-model="nombre_mascota"><br>

              <label>Nombres</label>
              <input type="text" name="Nombres" class="form-control" v-model="nombres_dueño"><br>

              <label>Apellidos</label>
              <input type="text" name="Apellidos" class="form-control" v-model="apellidos_dueño"><br>

              <label>Fecha Programada</label>
              <input type="date" name="Fecha Programada" class="form-control" v-model="fecha_programada"><br>

              <label>Hora De Registro</label>
              <input type="time" name="Hora De Registro" class="form-control" v-model="hora_registro"><br>


            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="actualizarVacuna(id_vacuna)">Guardar cambios</button>
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
<script src="js/vacunas/vacuna.js"></script>
<!-- <script src="js/vue.js"></script> -->

@endpush

<input type="hidden" name="route" value="{{url('/')}}">
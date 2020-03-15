@extends('layouts.administrador')
@section('titulo','Vacuna')
@section('contenido')

<div id="vacuna" class="container">

     <div class="container"> 
       <div class="row">
        <div class="col-xs-12">

        <!--   <input type="text" placeholder="Buscar" v-model="buscar" class="form-control">

          <br> -->

          <button class="btn btn-md btn-warning" data-toggle="modal" data-target="#agregar">Agregar</button>
          <button class="btn btn-md btn-info">PDF</button>
        

          <br>
          <br>

          <div class="row">
            <div class="col-xs-12 col-xs-12">

            <div class="table-responsive">
            <table class="table">
              <thead style="background-color:#039c77">
              <th><center>No.</center></th>
              <th><center>Mascota</center></th>
              <th><center>Propietario</center></th>
              <th><center>Apellidos</center></th>
              <th><center>Fecha Programada</center></th>
              <th><center>Opciones</center></th>
            </thead>
            <tbody>
              <tr v-for="vacuna in vacunas">
                <td><center>@{{vacuna.id_vacuna}}</center></td>
                <td><center>@{{vacuna.mascota}}</center></td>
                <td><center>@{{vacuna.propietario}}</center></td>
                <td><center>@{{vacuna.apellidos_propietario}}</center></td>
                <td><center>@{{vacuna.fecha_programada}}</center></td>
                
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
          <div class="modal-header"  style="background-color:#039c77">
           <!--  <center><h4 class="modal-title" id="exampleModalLabel"><strong class="color">Agregar</strong></h4></center> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          
          <div class="row">
            <div class="col-xs-12">

              <label>Mascota</label>
              <input type="text" name="Mascota" class="form-control" v-model="mascota" placeholder="Mascota"><br>

              <label>Nombres Del Propietario</label>
              <input type="text" name="Nombres Del Propietario" class="form-control" v-model="propietario" placeholder="Nombres Del Propietario"><br>

              <label>Apellidos</label>
              <input type="text" name="Apellidos" class="form-control" v-model="apellidos_propietario" placeholder="Apellidos"><br>

              <label>Fecha Programada</label>
              <input type="date" name="Fecha Programada" class="form-control" v-model="fecha_programada"><br>


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
          <div class="modal-header"  style="background-color:#039c77">
            <!-- <center><h4 class="modal-title" id="exampleModalLabel"><strong class="color">Editar</strong></h4></center> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="limpiar()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          
          <div class="row">
            <div class="col-xs-12">

              <label>Mascota</label>
              <input type="text" name="Mascota" class="form-control" v-model="mascota"><br>

              <label>Nombres Del Propietario</label>
              <input type="text" name="Nombres Del Propietario" class="form-control" v-model="propietario"><br>

              <label>Apellidos</label>
              <input type="text" name="Apellidos" class="form-control" v-model="apellidos_propietario"><br>

              <label>Fecha Programada</label>
              <input type="date" name="Fecha Programada" class="form-control" v-model="fecha_programada"><br>

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
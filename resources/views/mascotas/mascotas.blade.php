@extends('layouts.administrador')
@section('titulo','Mascotas')
@section('contenido')

<div id="mascota" class="container">

  <div class="container">
    <div class="row">
     <div>

      <button class="btn btn-md btn-warning" data-toggle="modal" data-target="#agregar">Agregar</button>

      <br>
      <br>

       <div class="row">
        <div class="col-xs-12 col-xs-12">

           <!-- <input type="text" placeholder="Buscar Por Propietario" v-model="buscar" class="form-control" -->>

           <br>

            <div class="table-responsive">
            <table class="table">
              <thead style="background-color:#039c77">
              <th><center>No.</center></th>
              <th><center>Especie</center></th>
              <th><center>Sexo</center></th>
              <th><center>Edad</center></th>
              <th><center>Mascota</center></th>
              <th><center>Fecha De Nacimiento</center></th>
              <th><center>Propietario</center></th>
              <th><center>Opciones</center></th>

            </thead>
            <tbody>
              <tr v-for="mascota in mascotas">
                <td><center>@{{mascota.id_mascota}}</center></td>
                <td><center>@{{mascota.especie}}</center></td>
                 <td><center>@{{mascota.sexo}}</center></td>
                <td><center>@{{mascota.edad}}</center></td>
                <td><center>@{{mascota.mascota}}</center></td>
                <td><center>@{{mascota.fecha_nacimiento}}</center></td>
                <td><center>@{{mascota.propietario}}</center></td>
                
                <td>
                 <center><span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" data-toggle="modal" data-target="#editarMascota" v-on:click="guardarMascota(mascota.id_mascota)"></span>

                  <span class="glyphicon glyphicon-trash btn btn-xs btn-danger" v-on:click="eliminarMascota(mascota.id_mascota)"></span></center>

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

              <label>Especie</label>
              <input type="text" name="Especie" class="form-control" v-model="especie" placeholder="Especie"><br>

              <label>Sexo</label>
              <input type="text" name="Sexo" class="form-control" v-model="sexo" placeholder="Sexo"><br>

              <label>Edad</label>
              <input type="text" name="Edad" class="form-control" v-model="edad" placeholder="Edad"><br>

              <label>Mascota</label>
              <input type="text" name="Mascota" class="form-control" v-model="mascota" placeholder="Nombre Mascota"><br>

              <label>Fecha De Nacimiento</label>
              <input type="date" name="Fecha De Nacimiento" class="form-control" v-model="fecha_nacimiento"><br>

              <label>Propietario</label>
              <input type="text" name="Propietario" class="form-control" v-model="propietario" placeholder="Propietario"><br>

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="agregarMascota(id_mascota)">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de modal -->

    <!-- Modal Editar -->
    <div class="modal fade" id="editarMascota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              
              <label>Especie</label>
              <input type="text" disabled="" name="Especie" class="form-control" v-model="especie"><br>

              <label>Sexo</label>
              <input type="text" name="Sexo" class="form-control" v-model="sexo"><br>

              <label>Edad</label>
              <input type="text" name="Edad" class="form-control" v-model="edad"><br>

              <label>Mascota</label>
              <input type="text" name="Mascota" class="form-control" v-model="mascota"><br>

              <label>Fecha De Nacimiento</label>
              <input type="text" name="Fecha De Nacimiento" class="form-control" v-model="fecha_nacimiento"><br>

              <label>Propietario</label>
              <input type="text" name="Propietario" class="form-control" v-model="propietario"><br>

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="actualizarMascota(id_mascota)">Guardar cambios</button>
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
<script src="js/mascotas/mascota.js"></script>
<!-- <script src="js/vue.js"></script> -->

@endpush

<input type="hidden" name="route" value="{{url('/')}}">
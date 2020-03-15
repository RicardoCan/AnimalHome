@extends('layouts.administrador')
@section('titulo','Usuarios')
@section('contenido')

<div id="administrador" class="container">

     <div class="container"> 
       <div class="row">
        <div class="col-xs-12">

        <!--   <input type="text" placeholder="Buscar" v-model="buscar" class="form-control">

          <br> -->

          <button class="btn btn-md btn-warning" data-toggle="modal" data-target="#agregar">Agregar</button>

          <br>
          <br>
        
          <div class="row">
            <div class="col-xs-12 col-xs-12">

            <input type="text" placeholder="Buscar Por Propietario" v-model="buscar" class="form-control">

            <br>

            <div class="table-responsive">
            <table class="table">
              <thead style="background-color:#039c77">
              <th><center>Nombre De Usuario</center></th>
              <th><center>Contraseña</center></th>
              <th><center>Nombres</center></th>
              <th><center>Apellidos</center></th>
              <th><center>Estatus</center></th>
              <th><center>Rol</center></th>
              <th><center>Opciones</center></th>
            </thead>
            <tbody>
              <tr v-for="(administrador,index) in filtroAdmin">
                <td><center>@{{administrador.nick}}</center></td>
                <td><center>@{{administrador.password}}</center></td>
                <td><center>@{{administrador.nombre}}</center></td>
                <td><center>@{{administrador.apellidos}}</center></td>
                <td><center>@{{administrador.active}}</center></td>
                <td><center>@{{administrador.id_rol}}</center></td>
                
                <td>
                 <center><span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" data-toggle="modal" data-target="#editarAdmin" v-on:click="guardarAdmin(administrador.nick)"></span>

                  <span class="glyphicon glyphicon-trash btn btn-xs btn-danger" v-on:click="eliminarAdmin(administrador.nick)"></span></center>

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
              
            <!--   <label>No.</label>
              <input type="number" name="No." class="form-control" v-model="id_mascota"><br> -->

              <label>Nombre De Usuario</label>
              <input type="text" name="Nombre De Usuario" placeholder="Nombre De Usuario" v-model="nick" class="form-control"><br> 

              <label>Contraseña</label>
              <input type="password" placeholder="Contraseña" v-model="password" class="form-control"><br> 
              
              <label>Nombres</label>
              <input type="text" name="Nombres" placeholder="Nombres" v-model="nombre" class="form-control"><br>  

              <label>Apellidos</label>
              <input type="text" name="Apellidos" placeholder="Apellidos" v-model="apellidos" class="form-control"><br>

              <label>Estatus</label>
              <select class="form-control" v-model="active">
               <option>
                Administrador
               </option> 
               <option>
                Usuario
               </option>
              </select>

                <br>

              <label>Rol</label>
              <select class="form-control" v-model="id_rol">
               <option>
                1
               </option> 
               <option>
                 2
               </option>
              </select>

              <br>

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="agregarAdmin(nick)">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de modal -->

    <!-- Modal Editar -->
    <div class="modal fade" id="editarAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              
             <!--  <label>No.</label>
              <input type="text" name="No." class="form-control" v-model="id_mascota"><br> -->

              <label>Nombre De Usuario</label>
              <input type="text" name="Nombre De Usuario" placeholder="Nombre De Usuario" v-model="nick" class="form-control"><br> 

              <label>Contraseña</label>
              <input type="password" placeholder="Contraseña" v-model="password" class="form-control"><br> 
              
              <label>Nombres</label>
              <input type="text" name="Nombres" placeholder="Nombres" v-model="nombre" class="form-control"><br>  

              <label>Apellidos</label>
              <input type="text" name="Apellidos" placeholder="Apellidos" v-model="apellidos" class="form-control"><br>

              <label>Estatus</label>
              <select class="form-control" v-model="active">
               <option>
                Administrador
               </option> 
               <option>
                Usuario
               </option>
              </select>

                <br>

              <label>Rol</label>
              <select class="form-control" v-model="id_rol">
               <option>
                1
               </option> 
               <option>
                 2
               </option>
              </select>

              <br>

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="actualizarAdmin(nick)">Guardar cambios</button>
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
<script src="js/administradores/administrador.js"></script>
<!-- <script src="js/vue.js"></script> -->

@endpush

<input type="hidden" name="route" value="{{url('/')}}">
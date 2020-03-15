@extends('layouts.usuario')
@section('titulo','Mascota')
@section('contenido')

<div id="mascota" class="container">

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
              <thead style="background-color: yellow">
              <th><center>No.</center></th>
              <th><center>Raza</center></th>
              <th><center>Genero</center></th>
              <th><center>Nombre</center></th>
              <th><center>Fecha De Nacimiento</center></th>
              <th><center>Alergia</center></th>
              <th><center>Dueño</center></th>
              <th><center>Opciones</center></th>
            </thead>
            <tbody style="color: white">
              <tr v-for="mascota in mascotas">
                <td><center>@{{mascota.id_mascota}}</center></td>
                <td><center>@{{mascota.raza}}</center></td>
                <td><center>@{{mascota.genero}}</center></td>
                <td><center>@{{mascota.nombre}}</center></td>
                <td><center>@{{mascota.fecha_nacimiento}}</center></td>
                <td><center>@{{mascota.alergia}}</center></td>
                <td><center>@{{mascota.dueño}}</center></td>
                
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

    </div>
        

                    <!-- Modal Agregar -->
    <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header"  style="background-color:yellow ">
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

              <label>Raza</label>
              <input type="text" name="Raza" class="form-control" v-model="raza" placeholder="Raza"><br>

              <label>Genero</label>
               <select class="form-control" v-model="genero">
               <option>
                M
               </option> 
               <option>
                H
               </option>
              </select>

              <br>
              
              <label>Nombre De La Mascota</label>
              <input type="text" name="Nombre" class="form-control" v-model="nombre" placeholder="Nombre Mascota"><br>

              <label>Fecha De Nacimiento</label>
              <input type="date" name="Fecha De Nacimiento" class="form-control" v-model="fecha_nacimiento"><br>

              <label>Alergia</label>
              <input type="text" name="Alergia" class="form-control" v-model="alergia" placeholder="Alergia"><br>

              <label>Dueño</label>
              <input type="text" name="Dueño" class="form-control" v-model="dueño" placeholder="Nombre Del Dueño"><br>

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
          <div class="modal-header"  style="background-color:yellow">
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

              <label>Raza</label>
              <input type="text" name="" class="form-control" v-model="raza"><br>

              <label>Genero</label>
              <select class="form-control" v-model="genero">
               <option>
                M
               </option> 
               <option>
                H
               </option>
              </select>

              <br>

              <label>Nombre De La Mascota</label>
              <input type="text" name="Nombre" class="form-control" v-model="nombre"><br>

              <label>Fecha De Nacimiento</label>
              <input type="text" name="Fecha De Nacimiento" class="form-control" v-model="fecha_nacimiento"><br>

              <label>Alergia</label>
              <input type="text" name="Alergia" class="form-control" v-model="alergia"><br>

              <label>Dueño</label>
              <input type="text" name="Dueño" class="form-control" v-model="dueño"><br>



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
@extends('layouts.administrador')
@section('titulo','Estetica')
@section('contenido')

<div id="estetica" class="container">

     <div class="container"> 
       <div class="row">
        <div class="col-xs-12">

          <button class="btn btn-md btn-warning" data-toggle="modal" data-target="#agregar">Agregar</button>
           <a href="{{url('imprimir')}}"><button class="btn btn-md btn-info">PDF</button></a>
        

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
              <th><center>Mascota</center></th>
              <th><center>Propietario</center></th>
              <th><center>Tipo</center></th>
              <th><center>Fecha Programada</center></th>
              <th><center>Hora Entrada</center></th>
              <th><center>Hora Salida</center></th>
              <th><center>Opciones</center></th>
            </thead>
            <tbody>
              <tr v-for="(estetica,index) in filtroEstetica">
                <td><center>@{{estetica.id_estetica}}</center></td>
                <td><center>@{{estetica.nombre_animal}}</center></td>
                <td><center>@{{estetica.nombre_dueño}}</center></td>
                <td><center>@{{estetica.tipo}}</center></td>
                <td><center>@{{estetica.fecha_programada}}</center></td>
                <td><center>@{{estetica.hora_entrada}}</center></td>
                <td><center>@{{estetica.hora_salida}}</center></td>

                
                <td>
                 <center><span class="glyphicon glyphicon-pencil btn btn-xs btn-primary" data-toggle="modal" data-target="#editarEstetica" v-on:click="guardarEstetica(estetica.id_estetica)"></span>

                  <span class="glyphicon glyphicon-trash btn btn-xs btn-danger" v-on:click="eliminarEstetica(estetica.id_estetica)"></span></center>

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
              

              <label>Nombre De La Mascota</label>
              <input type="text" name="Nombre De La Mascota" class="form-control" v-model="nombre_animal" placeholder="Nombre De La Mascota"><br>

              <label>Nombre Dueño</label>
              <input type="text" name="Nombre Dueño" class="form-control" v-model="nombre_dueño" placeholder="Nombre Dueño"><br>

              <label>Tipos</label>
               <select class="form-control" v-model="tipo">
               <option>
                PELUQUERIA
               </option> 
               <option>
                CUIDADO HIGÍENICO
               </option>
              </select>

              <br>

              <label>Fecha Programada</label>
              <input type="date" name="Fecha Programada" class="form-control" v-model="fecha_programada" placeholder="Fecha Programada"><br>

              <label>Hora Entrada</label>
              <input type="time" name="Hora Entrada" class="form-control" v-model="hora_entrada" placeholder="Hora Entrada"><br>

              <label>Hora Salida</label>
              <input type="time" name="Hora Salida" class="form-control" v-model="hora_salida" placeholder="Hora Salida"><br>

            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="agregarEstetica(id_estetica)">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Fin de modal -->

    <!-- Modal Editar -->
    <div class="modal fade" id="editarEstetica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

             
              <label>Nombre De La Mascota</label>
              <input type="text" name="Nombre De La Mascota" class="form-control" v-model="nombre_animal" placeholder="Nombre De La Mascota"><br>

              <label>Nombre Dueño</label>
              <input type="text" name="Nombre Dueño" class="form-control" v-model="nombre_dueño" placeholder="Nombre Dueño"><br>

              <label>Tipos</label>
               <select class="form-control" v-model="tipo">
               <option>
                PELUQUERIA
               </option> 
               <option>
                CUIDADO HIGÍENICO
               </option>
              </select>

              <br>

              <label>Fecha Programada</label>
              <input type="text" name="Fecha Programada" class="form-control" v-model="fecha_programada" placeholder="Fecha Programada"><br>

              <label>Hora Entrada</label>
              <input type="text" name="Hora Entrada" class="form-control" v-model="hora_entrada" placeholder="Hora Entrada"><br>

              <label>Hora Salida</label>
              <input type="text" name="Hora Salida" class="form-control" v-model="hora_salida" placeholder="Hora Salida"><br>



            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="actualizarEstetica(id_estetica)">Guardar cambios</button>
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
<script src="js/esteticas/estetica.js"></script>
<!-- <script src="js/vue.js"></script> -->

@endpush

<input type="hidden" name="route" value="{{url('/')}}">
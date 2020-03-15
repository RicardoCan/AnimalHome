@extends('layouts.administrador')
@section('titulo','Configuraciones')
@section('contenido')

<div id="configuracion" class="container">

    

      <div class="row">
        <div class="table-responsive">
            <div class="col-xs-12 col-xs-12">

            <div>
              <ul v-for="configuracion in configuraciones">

              <h2>Nombre De La Empresa</h2>
              <li>@{{configuracion.id_nombre}}</li>

              <h2>Misión</h2>
              <li>@{{configuracion.mision}}</li>

              <h2>Visión</h2>
              <li>@{{configuracion.vision}}</li>

              <h2>Calle</h2>
              <li>@{{configuracion.calle}}</li>

              <h2>Teléfono</h2>
              <li>@{{configuracion.telefono}}</li>

              <br>

              <span class=" btn btn-primary" data-toggle="modal" data-target="#editarConfiguracion" v-on:click="guardarConfiguracion(configuracion.id_nombre)">Editar</span>
          
            </ul> 
             
          </div>
          
        </div>

   

    <!-- Modal Editar -->
    <div class="modal fade" id="editarConfiguracion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

              <label>Nombre De La Empresa</label>
              <input type="text" name="Nombre Empresa" class="form-control" v-model="id_nombre"><br>

              <label>Mision</label>
              <input type="text" name="Mision" class="form-control" v-model="mision"><br>

              <label>Vision</label>
              <input type="text" name="Vision" class="form-control" v-model="vision"><br>

              <label>Calle</label>
              <input type="text" name="Calle" class="form-control" v-model="calle"><br>

              <label>Telefono</label>
              <input type="text" name="Telefono" class="form-control" v-model="telefono"><br>


            </div>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal" v-on:click="limpiar()">Cancelar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" v-on:click="actualizarConfiguracion(id_nombre)">Guardar cambios</button>
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
<script src="js/configuraciones/configuracion.js"></script>
<!-- <script src="js/vue.js"></script> -->

@endpush

<input type="hidden" name="route" value="{{url('/')}}">
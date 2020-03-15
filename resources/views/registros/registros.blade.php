@extends('layouts.master')
@section('titulo','Nuevo Usuario')

@section('contenido')

<div id="administrador">

  <div class="container">

  	<br>
 
 <h1 class="login100-form-title p-t-20 p-b-45">
						INGRESE SUS DATOS
					</h1>	

	<div class="row">
		<div class="col-xs-4">
		
		</div><!-- fin del row del 6 -->
		<div class="col-xs-4">

			
			<div class="wrap-input100 validate-input m-b-10">
						<input class="input100" type="text"  placeholder="Usuario" v-model="nick">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<br>

					<div class="wrap-input100 validate-input m-b-10">
						<input class="input100" type="password"  placeholder="Contraseña" v-model="password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<br>

					<div class="wrap-input100 validate-input m-b-10">
						<input class="input100" type="text"  placeholder="Nombres" v-model="nombre">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<br>

					<div class="wrap-input100 validate-input m-b-10">
						<input class="input100" type="text"  placeholder="Apellidos" v-model="apellidos">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<br>

			
			
			
			<button class="login100-form-btn"  @click="agregarAdmin(nick)">Guardar</button>
			<br>
		    <a href="inicio"> <button class="login100-form-btn">Iniciar sesion</button></a>
			
		</div>

		<div class="col-xs-4">
			
		</div>
		
	   </div>

  </div><!-- fin de contenedor -->
</div><!-- fin del vue -->

@endsection

@push('scripts')
<script src="js/vue-resource.js"></script>
<script src="js/administradores/administrador.js"></script>

@endpush


<input type="hidden" name="route" value="{{url('/')}}">
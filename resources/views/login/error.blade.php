@extends('layouts.master')
@section('titulo','Error')

@section('contenido')

  <body>
    <div class="contenedor">

      <div class="login">
        <article class="fondo">
          <img src="Img/Animal_Home.png" alt="User">
          <h3>ERROR DATOS INVALIDOS</h3>
          
         
            <a href="inicio"><input class="boton" type="submit" value="Regresar"></a>
          </form>
        </article>
      </div>

    </div>
  </body>


@endsection

<input type="hidden" name="route" value="{{url('/')}}">
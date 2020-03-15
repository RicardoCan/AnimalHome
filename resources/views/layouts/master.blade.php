<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="token" id="token" value="{{ csrf_token() }}">
    <meta name="route" value="{{url('/')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/util.css"> 
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/error.css">
    <link rel="stylesheet" href="css/fonts.css">
      
    <title>@yield('titulo')</title>

    <!-- Bootstrap --> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script type="text/JavaScript" src="js/vue.js"></script>

  </head>
  <body background="img/index/3050604.jpg">

    @yield('contenido')




    @stack('scripts')

   
  </body>
</html>


<input type="hidden" name="route" value="{{url('/')}}">
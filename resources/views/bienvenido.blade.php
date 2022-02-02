<!DOCTYPE html>
<html> 
<head>
<link rel="stylesheet" href='{{url("/plantilla")}}/bootstrap/css/bootstrap.min.css'>

<title>@yield('titulo')</title>

</head>

<body>
    
    @yield('contenido')

    <center>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/clientes">Clientes</a></li>
      <li><a href="/pedidos">pedidos</a></li>
      <li class="active"><a href="/articulos">articulos</a></li>
    </ul>
    </div>
    </center>

    <br>
<center>

<h1> carlos centeno, leidy morales, ivan robles</h1>

</center>
</body>



</html>
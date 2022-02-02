<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <link rel="stylesheet" href='{{url("/plantilla")}}plugins/datatables/dataTables.bootstrap.css'>
    
    <title>CRUD con Laravel 8 y Bootstrap 5</title>
  </head>
  <body>
    <div class="container">
    <h1 class="bg-primary text-white text-center mb-3">CRUD con Laravel 8 y Bootstrap 5</h1>


    <div class="container">
        @yield('contenido')
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    -->
    <script src='{{url("/plantilla")}}/plugins/jQuery/jquery-2.2.3.min.js'></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src='{{url("/plantilla")}}/bootstrap/js/bootstrap.min.js'></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src='{{url("/plantilla")}}/plugins/morris/morris.min.js'></script>
<!-- Sparkline -->
<script src='{{url("/plantilla")}}/plugins/sparkline/jquery.sparkline.min.js'></script>
<!-- jvectormap -->
<script src='{{url("/plantilla")}}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
<script src='{{url("/plantilla")}}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
<!-- jQuery Knob Chart -->
<script src='{{url("/plantilla")}}/plugins/knob/jquery.knob.js'></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src='{{url("/plantilla")}}/plugins/daterangepicker/daterangepicker.js'></script>
<!-- datepicker -->
<script src='{{url("/plantilla")}}/plugins/datepicker/bootstrap-datepicker.js'></script>
<!-- Bootstrap WYSIHTML5 -->
<script src='{{url("/plantilla")}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'></script>
<!-- Slimscroll -->
<script src='{{url("/plantilla")}}/plugins/slimScroll/jquery.slimscroll.min.js'></script>
<!-- FastClick -->
<script src='{{url("/plantilla")}}/plugins/fastclick/fastclick.js'></script>
<!-- AdminLTE App -->
<script src='{{url("/plantilla")}}/dist/js/app.min.js'></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src='{{url("/plantilla")}}/dist/js/demo.js'></script>
<script src='{{url("/plantilla")}}/plugins/datatables/jquery.dataTables.min.js'></script>
<script src='{{url("/plantilla")}}/plugins/datatables/dataTables.bootstrap.min.js'></script>

@yield('script')
  </body>
</html>
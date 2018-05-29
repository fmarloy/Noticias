<!DOCTYPE html>
<html lang="en">
<head>
	<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/css/Plantilla.css') }}" rel="stylesheet" type="text/css" />
  <link href="http://designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css" rel="stylesheet">
</head>

<body>
  <!-- Fixed navbar -->
  <div id="navigation" class="navbar" id="navbar">
    <div class="container" id="contenedorNav">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/index')}}">Noticias</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" id="MenuP">
          <li><a href="{{ url('/index')}}">Inicio</a></li>
          <li><a href="{{ url('/list')}}">Listar Noticias</a></li>
          <li><a href="{{ url('/notice')}}">Agregar Noticias</a></li>
        </ul>
      </div>
    </div>
  </div>


  <div class="box box-primary">
    @yield('content')
  </div>

  <footer class="main-footer" id="piedepagina">
    <h1 style="color: #000">Desarrollado por Frank</h1>
  </footer>

  <script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.js') }}" type="text/javascript"></script>

</body>

</html>

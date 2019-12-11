<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <title>Gestion proyecto</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('empleados.index')}}">Empleados <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('proyectos.index')}}">Proyectos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('departamentos.index')}}">Departamentos <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    
  </div>
</nav>
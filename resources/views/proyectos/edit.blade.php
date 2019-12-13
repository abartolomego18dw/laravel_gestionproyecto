@include('layouts.navbar')

<h2><b>Insertar proyecto</b></h2>
<form action="{{route('proyectos.update', $proyecto->id)}}" method="post">
    @method('PUT')
    @csrf
    <p>Nombre: <input type="text" name="nombre" placeholder="{{$proyecto->nombre}}" value="{{$proyecto->nombre}}" readonly></p>
    <p>Titulo: <input type="text" name="titulo" placeholder="{{$proyecto->titulo}}" value="{{$proyecto->titulo}}">
        
    </p>
    <p>Fecha de inicio: <input type="date" name="fechaInicio" placeholder="{{$proyecto->fechainicio}}" value="{{$proyecto->fechainicio}}">
        
    </p>
    <p>Fecha fin <input type="date" name="fechaFin" placeholder="{{$proyecto->fechafin}}" value="{{$proyecto->fechafin}}">
        
    </p>
    <p>Horas estimadas: <input type="number" name="horas" placeholder="{{$proyecto->horasestimadas}}" value="{{$proyecto->horasestimadas}}">
        
    </p>
    <p>Empleado respondable: <input type="text" name="empleado" placeholder="{{$proyecto->empleado->nombre}}" value="{{$proyecto->empleado->nombre}}">
        
        
    </p>
    <p>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </p>
</form>
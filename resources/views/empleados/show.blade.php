@include('layouts.navbar')


  <h2>Empleado</h2>

  @foreach ($empleados as $empleado)

    <ul>
      <li>Id: {{$empleado->id}}</li>
      <li>Nombre: {{$empleado->nombre}}</li>
      <li>Email: {{$empleado->email}}</li>
      <li>Telefono: {{$empleado->telefono}}</li>
      <li>id del proyecto: {{$empleado->proyecto_id}}</li>
      <li>Jefe de Departamento: <a href="{{route('departamento', $empleado->jefeDe->empleado_id)}}">{{$empleado->jefeDe->empleado_id}}</li>
      <li>Departamento: <a href="{{route('departamento',$empleado->departamento_id)}}">{{$empleado->departamento_id}}</a></li>
      @endforeach
      <li> Proyectos en las colabora: 
      @foreach($empleado->proyectos as $proyecto)
              <a href="{{route('proyectos.show', $proyecto->id)}}">{{$proyecto->id}}</a>,
            @endforeach
      </li>
    


</body>
</html>
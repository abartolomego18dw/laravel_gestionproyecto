@include('layouts.navbar')



  <h2>Departamento</h2>

  @foreach ($departamentos as $departamento)

    <ul>
      <li>Id: {{$departamento->id}}</li>
      <li>Nombre: {{$departamento->nombre}}</li>
      <li>Empleados:
                @foreach($departamento->empleado as $empleado)
                    <a href="{{route('empleados.show', $empleado->id)}}">{{$empleado->id}}</a>,  
                @endforeach
            </li>
      <li>Jefe de Departamento: <a href="{{route('empleados.show', $departamento->empleado_id)}}">{{$departamento->empleado_id}}</a></li>
      </ul>
        
      @endforeach

    


</body>
</html>
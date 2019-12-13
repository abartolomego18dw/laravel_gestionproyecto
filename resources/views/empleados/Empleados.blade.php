@include('layouts.navbar')
  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>ID Proyecto</th>
        <th>Departamento</th>
        <th>Colaborador de proyectos</th>
      </tr>
      @foreach ($empleados as $empleado)
      <tr>
        <td><a href="{{route('empleados.show',$empleado->id)}}">{{$empleado->id}}</a></td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
        <td><a href="{{route('proyectos.show', $empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a></td>
        <td><a href="{{route('departamento',$empleado->departamento_id)}}">{{$empleado->departamento_id}}</a></td>
        <td>
        @foreach($empleado->proyectos as $proyecto)
              <a href="{{route('proyectos.show', $proyecto->id)}}">{{$proyecto->id}}</a>
            @endforeach
        </td>
        <td>
              <a href="{{route('departamento', $empleado->jefeDe->empleado_id)}}">{{$empleado->jefeDe->empleado_id}}</a>
          </td>
      </tr>
      @endforeach

    </table>


</body>
</html>
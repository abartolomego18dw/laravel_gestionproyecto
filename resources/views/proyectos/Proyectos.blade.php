@include('layouts.navbar')
<h2>Proyectos</h2>

<button><a href="{{route('proyectos.create')}}">Insertar</a></button>
	<table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
        <th>Nombre del empleado</th>
      </tr>
      @foreach ($proyectos as $proyecto)
      <tr>
        <td><a href="{{route('proyectos.show', $proyecto->id)}}">{{$proyecto->id}}</a></td>
        <td>{{$proyecto->nombre}}</td>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->fechainicio}}</td>
        <td>{{$proyecto->fechafin}}</td>
        <td>{{$proyecto->horasestimadas}}</td>
        <td><a href="{{route('empleados.show', $proyecto->empleado_id)}}">{{$proyecto->empleado_id}}</td>
        <td><form action="{{route('proyectos.edit', $proyecto->id)}}" method="get">
        @csrf
        <input type="submit" value="Editar">
      </form></td>
      <td><form action="{{route('proyectos.destroy', $proyecto->id)}}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" value="Eliminar">
      </form></td>
      </tr>
      @endforeach
    </table>

    
	
     

    
	
	
</body>
</html>
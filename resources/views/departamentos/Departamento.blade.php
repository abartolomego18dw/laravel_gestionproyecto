@include('layouts.navbar')

  <h2>Empleado</h2>

  @foreach ($departamentos as $departamento)

    <ul>
      <li>Id: {{$departamento->id}}</li>
      <li>Nombre: {{$departamento->nombre}}</li>
      </ul>
        
      @endforeach

    


</body>
</html>
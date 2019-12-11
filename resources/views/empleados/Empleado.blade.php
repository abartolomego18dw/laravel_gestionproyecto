@include('layouts.navbar')


  <h2>Empleado</h2>

  @foreach ($empleados as $empleado)

    <ul>
      <li>Id: {{$empleado->id}}</li>
      <li>Nombre: {{$empleado->nombre}}</li>
      <li>Email: {{$empleado->email}}</li>
      <li>Telefono: {{$empleado->telefono}}</li>
      <li>id del proyecto: {{$empleado->proyecto_id}}</li> 
      @endforeach

    


</body>
</html>
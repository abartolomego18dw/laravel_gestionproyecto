@include('layouts.navbar')


  <h2>Proyecto</h2>



    <ul>
        <li>Id: {{$proyecto->id}}</li>
        <li>Nombre: {{$proyecto->nombre}}</li>
        <li>Titulo: {{$proyecto->titulo}}</li>
        <li>fecha inicio: {{$proyecto->fechainicio}}</li>
        <li>Fecha fin: {{$proyecto->fechafin}}</li>
        <li>Horas estimadas: {{$proyecto->horasestimadas}}</li>
        <li>Id de empleado: {{$proyecto -> empleado_id}}</li>
      </ul>


    


</body>
</html>
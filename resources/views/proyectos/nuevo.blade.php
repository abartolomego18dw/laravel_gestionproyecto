
@include('layouts.navbar') 
<h2><b>Insertar proyecto</b></h2>

    <form action="{{route('proyectos.store')}}" method="post">
    @csrf
        <p>Nombre: <input type="text" name="nombre">
       
        </p>
        <p>Titulo: <input type="text" name="titulo">
        
        </p>
        <p>Fecha inicio: <input type="date" name="fechaIni" value="yyyy-mm-dd" placeholder="fecha-ini">
        
        </p>
        <p>Fecha fin: <input type="date" name="fechaFin" value="yyyy-mm-dd" placeholder="fecha-fin">
        
        </p>
        <p>Horas estimadas: <input type="number" name="horas" value="" placeholder="horas estimadas">
        
        </p>
        
        </p>
        <p>Empleado respondable: <input type="text" name="empleado" value="empleado">
        
        </p>
        <p>
            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
        </p>
    </form>
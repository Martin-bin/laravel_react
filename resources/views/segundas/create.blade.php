<h2>Formulario</h2>

<form action="{{ url('/segundas')}}" method="post" enctype="multipart/form-data"> 
{{ csrf_field() }}	
    
    <label for="nombre">{{'nombre'}}</label>
    <input type="text" name="nombre" id="Nombre" value="">
    <br><br>

    <label for="apellido">{{'apellido'}}</label>
    <input type="text" name="apellido" id="Apellidos" value="">
    <br><br>

    <label for="correo">{{'correo'}}</label>
    <input type="email" name="correo" id="correo" value="">
    <br><br>

    <label for="edad">{{'edad'}}</label>
    <input type="text" name="edad" id="edad" value="">
    <br><br>

    <label for="fecha">{{'Foto'}}</label>
    <input type="file" name="fecha" id="Fecha" value="">
    <br><br>

    <input type="submit" value="Agregar">
    <br>
    <a href="{{ url('segundas') }}">Regresar</a>

</form>
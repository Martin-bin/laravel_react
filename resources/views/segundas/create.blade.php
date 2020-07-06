<h2>Formulario</h2>

<form action="{{ url('/segundas')}}" method="post" enctype="multipart/form-data"> 
{{ csrf_field() }}	
    
    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" value="">
    <br><br>
    <label for="Apellidos">{{'Apellidos'}}</label>
    <input type="text" name="Apellidos" id="Apellidos" value="">
    <br><br>
    <label for="correo">{{'correo'}}</label>
    <input type="email" name="correo" id="correo" value="">
    <br><br>
    <label for="edad">{{'edad'}}</label>
    <input type="text" name="edad" id="edad" value="">
    <br><br>
    <label for="Fecha">{{'Fecha'}}</label>
    <input type="file" name="Fecha" id="Fecha" value="">
    <br><br>
    <input type="submit" value="Agregar">

</form>
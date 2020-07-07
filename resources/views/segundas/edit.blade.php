<h2>Editar registro</h2>

<form action="{{ url('/segundas/'.$v_segunda->id) }}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	{{ method_field('PATCH') }}
	
	<label for="nombre">{{'Nombre'}}</label>
    <input type="text" name="nombre" id="Nombre" value="{{ $v_segunda->nombre }}">
    <br><br>

    <label for="apellido">{{'Apellido'}}</label>
    <input type="text" name="apellido" id="Apellidos" value="{{ $v_segunda->apellido }}">
    <br><br>

    <label for="correo">{{'Correo'}}</label>
    <input type="email" name="correo" id="correo" value="{{ $v_segunda->correo }}">
    <br><br>

    <label for="edad">{{'Edad'}}</label>
    <input type="text" name="edad" id="edad" value="{{ $v_segunda->edad }}">
    <br><br>

    <label for="fecha">{{'Fecha'}}</label>
    <br>
    {{ $v_segunda->fecha }}
    <br>
    <input type="file" name="fecha" id="Fecha" value="">
    <br><br>
    <input type="submit" value ="Guardar cambios">

</form>
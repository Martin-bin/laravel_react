@if(Session::has('Mensaje')){{
	Session::get('Mensaje')
}}
@endif
<h2>REGISTROS</h2>
<br>
<a href="{{ url('segundas/create') }}">Agregar nuevo</a>
<br>

<table class="tabla">
	<thead class="thead">
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Correo</th>
			<th>Edad</th>
			<th>Foto</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>
		@foreach($indiceSegundas as $segunda)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $segunda->nombre }}</td>
			<td>{{ $segunda->apellido }}</td>
			<td>{{ $segunda->correo }}</td>
			<td>{{ $segunda->edad }}</td>
			
			<td>
				<img src="{{ asset('storage').'/'.$segunda->fecha }}" alt="" width="200">
			</td>
			
			<td>
			<a href="{{ url('/segundas/'.$segunda->id.'/edit') }}">
				Editar
			</a> 

           <form method="post" action="{{ url('/segundas/'.$segunda->id) }}">
           	{{csrf_field() }}
           	{{ method_field('DELETE') }}
           	<button type="submit" onclick="return confirm('BORRAR?');">Borrar</button>
           </form>

			</td>
		</tr>
		@endforeach
	</tbody>
	
</table>
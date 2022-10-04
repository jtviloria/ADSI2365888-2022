@extends('inicio')

@section('content')
<div class="container w-25 border p-4 my-4">
	<div class="row mx-auto">
		<form action="{{ route('usuario.update',['usuario' => $usuario->id]) }} " method="post">
			@csrf
			
			@if(session('success'))
			<h5 class="alert alert-success">{{ session('success') }}</h5>
			@endif

			@error('Nombre')
			<h5 class="alert alert-danger">{{ $message }}</h5>
			@enderror

			<div class="mb-3">
				<label for="Nombre" class="form-label">Nombre</label>
				<input type="text" name="Nombre" value="{{ $usuario->Nombre" class="form-control" id="Nombre">
			</div>


			@error('email')
			<h5 class="alert alert-danger">{{ $message }}</h5>
			@enderror

			<div class="mb-3">
				<label for="email">Email</label>
				<input type="email" name="email" value="{{ $usuario->email }}" class="form-control" id="email">
			</div>


			@error('fecha_nacimiento')
			<h5 class="alert alert-danger">{{ $message }}</h5>
			@enderror

			<div class="mb-3">
				<label for="fecha_nacimiento">Fecha nacimiento</label>
				<input type="date" name="fecha_nacimiento" class="form-control" id="date">
			</div>


			@error('rol')
			<h5 class="alert alert-danger">{{ $message }}</h5>
			@enderror

			<div class="mb-3"> 
				<label for="rol_id" class="form-label">Rol</label>
				<select name="rol_id" class="form-control" id="rol_id">
					<option value="0">Seleccione</option>
					<?php foreach ($roles as $rol): ?>
					<option value="{{ $rol->id }}">{{ $rol->nombreRol}}</option>
					<?php endforeach ?>
				</select>
			</div>


			@error('clave')
			<h5 class="alert alert-danger">{{ $message }}</h5>
			@enderror

				<div class="mb-3">
				<label for="clave">Contraseña</label>
				<input type="password" name="clave" class="form-control" id="clave">
			</div>

			<div class="mb-3"> 
				<button type="submit" class="btn btn-primary">Crear usuario</button>
			</div>

		</form>
	</div>
</div>
@endsection
@extends('inicio')

@section('content')
<div class="container w-25 border p-4 my-4">
	<div class="row mx-auto">
		<form action="{{ route('usuario.store') }} " method="post">
			@csrf
			
			@if(session('success'))
			<h5 class="alert alert-success">{{ session('success') }}</h5>
			@endif

			@error('Nombre')
			<h5 class="alert alert-danger">{{ $message }}</h5>
			@enderror

			<div class="mb-3">
				<label for="Nombre" class="form-label">Nombre</label>
				<input type="text" name="Nombre" class="form-control" id="Nombre">
			</div>


			@error('email')
			<h5 class="alert alert-danger">{{ $message }}</h5>
			@enderror

			<div class="mb-3">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" id="email">
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
		<div>
			@foreach($usuarios as $usuario)
			<div class="row py-1">
				<div class="col-md-9 d-flex align-items-center">
					<a href="{{ route ('usuario.show', ['usuario' => $usuario->id]) }}">{{ $usuario->Nombre }}</a>
				</div>

				<div class="col-md-3 d-flex justify-content-end">
					
					<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal{{ $usuario->id}}">
	Eliminar
</button>

<!-- Modal -->
<div class="modal fade" id="Modal{{$usuario->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Estas seguro de eliminar el usuario {{ $usuario->Nombre }}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
        <form action="{{ route('usuario.destroy', ['usuario' => $usuario->id]) }}" method="post">
        	@method('DELETE')
        	@csrf

        	<button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>

				</div>
			</div>

			@endforeach
		</div>
	</div>
</div>
@endsection
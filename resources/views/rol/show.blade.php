
@extends('inicio');

@section('content')

<div class="container w-25 mt-4 border p-4">
	<form action="{{ route('rol-update', ['id' => $rol->id]) }}" method="post">
		@method('PATCH')
		@csrf
		

		@if(session('success'))
		<h5 class="alert alert-success">{{ session('success') }}</h5>
		@endif

		@error('rol')
		<h5 class="alert alert-danger">{{ $message }}</h5>
		@enderror
		<div class="mb-3">
			<label for="rol" class="form-label">Nombre Rol</label>
			<input type="text" name="rol" class="form-control" id="rol" value="{{ $rol->nombreRol }}">
		</div>
		<div class="mb-3">
			<button type="submit" class="btn btn-primary">Actualizar Rol</button>
		</div>
	</form>
	<div>
		@if ($rol ->usuarios->count() > 0)
		@foreach ($rol->usuarios as $usuario)
		<div class="row py-1">
			<div class="col-md-9 d-flex align-items-center">		
				<a href="{{ route('usuario.show', ['usuario' => $usuario->id]) }}">{{ $usuario->Nombre }} </a>
			</div>

			<div class="col-md-3 d-flex justify-content-end">
				<form action="{{ route('usuario.destroy',[$usuario->id])}}" method="post">
					@method('DELETE')
					@csrf

					<button class="btn btn-danger btn-sm">Eliminar</button>	
				</form>
			</div>
		</div>
		@endforeach
		@else
			no tengo usuarios asignados en este rol
		@endif
	</div>
</div>
@endsection
@extends('inicio');

@section('content')

<div class="container w-25 mt-4 border p-4">
	<form action="{{ route('rol') }}" method="post">
		

		<div class="mb-3">
			<label for="rol" class="form-label">Nombre Rol</label>
			<input type="text" name="rol" class="form-control" id="rol">
		</div>
		<div class="mb-3">
			<button type="submit" class="btn btn-primary">Crear Rol</button>
		</div>
	</form>

	<div>
		@foreach ($roles as $rol)
		<div class="row py-1">
			<div class="col-md-9 d-flex align-items-center">
				<a href="{{ route('rol-edit', ['id' => $rol->id]) }}"> {{ $rol->nombreRol }} </a>
			</div>
			<div class="col-md-3 d-flex justify-content-end">
				<form action="{{ route('rol-destroy', ['id' => $rol->id]) }}" method="post">
					@method('DELETE')	
					@csrf

					<button class="btn btn-danger btn-sm">Eliminar</button>
				</form>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection
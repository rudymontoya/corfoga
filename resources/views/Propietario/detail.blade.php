@extends('welcome')

@section('content')

<div class="container">
	<h5>
		Información general del Propietario seleccionado
	</h5>

    <div class="row">
        <div class="col-md-4 col-md-offset-0">
            <div class="panel panel-default">
                 <div class="panel-body">

					  <p><b>Identificador:</b> {{ $propietario->id }}</p>
					  <p><b>Nombre de Propietario:</b> {{ $usuario->nombre }}</p>
					  <p><b>Cedula:</b> {{ $propietario->usuario_cedula }}</p>

		    	</div>
		    </div>
		</div>
	</div>
</div>
@endsection 
@extends('welcome')

@section('content')

<div class="container">
	<h5>
		Información general la Finca:  <b>{{$finca->nombre}}</b>
	</h5>

    <div class="row">
        <div class="col-md-7 col-md-offset-0">
            <div class="panel panel-default">
                 <div class="panel-body">

					  <p><b>Id:</b> {{ $finca->id }}</p>

					  <p><b>Nombre:</b> {{ $finca->nombre }}</p>


					  <p><b>Región:</b> {{ $finca->region }}</p>

					  <p><b>Id Propietario:</b> {{ $finca-> propietario_id}}</p>

					  <p><b>Ced. Propietario:</b>  {{ $propietario-> usuario_cedula}}</p>

		    	</div>
		    </div>
		</div>
	</div>
</div>
@endsection 
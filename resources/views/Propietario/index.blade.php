@extends('welcome')

@section('content')

  <div class="container">
  <p>En esta sección se muestran todos los Propietarios registrados en el sistema </p>
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
               
                <table class="table">
                  <thead>
                          <tr>
                            <th>Id</th>
                            <th>Cedula</th>
                            <th>Nombre</th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                          <br>
                  </thead>

                  <tbody>
                    @foreach ($propietario as $item)
                                  <tr>
                                      <td scope="row">{{ $item->id }}</td>
                                      
                                      <td>{{ $item->usuario_cedula}}</td>

                                      <td>{{ $item->nombre}}</td>

                                      <td> 
                                        <a href="/propietario/{{$item->id }}" class="btn btn-success btn-sm" role="button"> Detalle </a>
                                      </td>

                                      <td>
                                        <a href="/propietario/{{$item->id }}/edit" class="btn btn-warning btn-sm" class= "btn btn-warning" role="button">Editar</a> 
                                      </td>

                                      <td>
                                           <form class="" action="propietario/{{ $item->id }}" method="post">
                                                                <input type="hidden" name="_method" value="delete">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <input class= "btn btn-danger btn-sm" class= "btn btn-danger"  type="submit" name="name" value="Eliminar">
                                          </form>
                                      </td>

                                  </tr>
                    @endforeach
            </tbody>
            </table>
          </div>
        </div>
      </div>

   </div>



   
   @endsection 
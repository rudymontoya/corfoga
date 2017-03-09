@extends('welcome')

@section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
             
                @section('content')

  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-0">
            <div class="panel panel-default">
             
                <table class="table">
                  <thead>
                          <tr>
                            <th> Identificador</th>
                            <th> Nombre de Finca</th>
                            <th> Región</th>
                            <th> Id Propietario</th>
                            <th> Propietario</th>
                            <th></th>
                            <th></th>
                            <th></th>

                          </tr>
                          <br>
                  </thead>

                  <tbody>
            
                    @foreach ($finca as $item)
                                  <tr>
                                      <th scope="row">{{ $item->id }}</th>
                                      <td>{{ $item->nombreFinca }}</td>
                                      <td>{{ $item->region }}</td>
                                      <td>{{ $item->propietario_id}}</td>
                                      <td>{{ $item->nombre}}</td>
                                      <td>
                                        <a href="/finca/{{$item->id}}" class="btn btn-success btn-sm" role="button"> Detalle </a>
                                      </td>

                                      <td>
                                         <a href="/finca/{{ $item->id }}/edit" class= "btn btn-warning btn-sm" role="button">Editar</a> 

                                      </td>

                                      <td>
                                          <form class="" action="finca/{{ $item->id }}" method="post">
                                                                <input type="hidden" name="_method" value="delete">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <input class= "btn btn-danger btn-sm"  type="submit" name="name" value="Eliminar">
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
          </div>
        </div>
      </div>

   </div>



   
   @endsection 
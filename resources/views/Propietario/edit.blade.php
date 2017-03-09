@extends('welcome')

@section('content')

    <div class="container">
    <h5>Edición de Usuario <b>{{$propietario->nombre}}</b></h5>
    <div class="row">
        <div class="col-md-7 col-md-offset-0">
            <div class="panel panel-default">
              
                 <div class="panel-body">

                      <form class="form-horizontal"  action="/propietario/{{$propietario->id}}" method="post">
                      
                     
                      <div class="form-group">
                              <label for="id" class="col-md-3 control-label">Id</label>

                              <div class="col-md-4">
                                  <input  readonly="readonly" class="form-control" type="text" name="id" value="{{$propietario->id}}" placeholder="" >
                                  {{ ($errors->has('id')) ? $errors->first('id') : '' }}
                              </div>
                      </div>

                        <div class="form-group">
                              <label for="usuario_cedula" class="col-md-3 control-label"> N° Cedula del Propietario</label>
                              <div class="col-md-4">
                                  <select class="form-control" id="usuario_cedula"  name="usuario_cedula">
                                  
                                     <option>
                                          {{$propietario->usuario_cedula}}
                                     </option>
                                
                                  </select>
                              </div>
                              
                        </div>


                        <div class="form-group" align="center">
                            <input type="hidden" name="_method" value="put">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-info" name="name" value="Editar">
                        </div>
                      


                  </form>
                </div>

            </div>

        </div>

    </div>
  
  </div>

@endsection


@extends('welcome')

@section('content')
    <div class="container">
    <h5>Edición del Usuario selecionado </h5>
    <br>
    <div class="row">
        <div class="col-md-7 col-md-offset-0">
          <div class="panel panel-default">

                 <div class="panel-body">

                      <form class="form-horizontal" action="/usuario/{{ $usuario->id}}" method="post">
                      
                     <div class="form-group">
                              <label for="id" class="col-md-2 control-label">Id</label>

                              <div class="col-md-5">
                                  <input  readonly="readonly" class="form-control" type="text" name="id" value="{{$usuario->id}}" placeholder="" >
                                  {{ ($errors->has('id')) ? $errors->first('id') : '' }}
                              </div>
                      </div>
                        
                       <div class="form-group">
                              <label for="nombre" class="col-md-2 control-label">Nombre</label>

                              <div class="col-md-5">
                                  <input class="form-control" type="text" name="nombre" value="{{$usuario->nombre}}" placeholder="">
                                  {{ ($errors->has('nombre')) ? $errors->first('nombre') : '' }}
                              </div>
                          </div>



                      <div class="form-group">
                              <label for="email" class="col-md-2 control-label">Email</label>

                              <div class="col-md-5">
                                  <input class="form-control" type="text" name="email" value="{{$usuario->email}}" placeholder="">
                                  {{ ($errors->has('email')) ? $errors->first('email') : '' }}
                              </div>
                          </div>



                      <div class="form-group" >
                              <label for="telefono" class="col-md-2 control-label">Telefono</label>

                              <div class="col-md-5">
                                  <input class="form-control" type="text" name="telefono" value="{{$usuario->telefono}}" placeholder="">
                                  {{ ($errors->has('telefono')) ? $errors->first('telefono') : '' }}
                              </div>
                          </div>



                        <div class="form-group">
                                      <label for="rol" class="col-md-2 control-label">Rol</label>
                                      <div class="col-md-3">
                                          <select class="form-control" id="rol" control-label" name="rol">
                                            <option>admin</option>
                                            <option>ganadero</option>
                                            <option>inspector</option>
                                          </select>
                                       </div>
                                </div>


                      <div class="col-md-4 col-md-offset-6" >
                          <input type="hidden" name="_method" value="put">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <input type="submit"  class="btn btn-info" name="name" value="Editar">
                      </div>
                    
                  </form>
                </div>

            </div>

        </div>
    </div>
    
  
  </div>

 @endsection


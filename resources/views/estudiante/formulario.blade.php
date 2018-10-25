@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-body">
                @if(Session::has('message'))
                  <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  {{Session::get('message')}}
                  </div>
                @endif
                @if(Session::has('message-error'))
                  <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{Session::get('message-error')}}
                  </div>
                @endif
                    <div class="tab-content">
                         <h1>Ejemplo 1</h1>
                      <form method="GET" action="{{url('/')}}/validar" accept-charset="UTF-8" enctype="multipart/form-data">
                        <div class="form-group">
                              <label for="nombre_apellido">Nombre:</label>
                              <input type="text" name="nombre_apellido" class="form-control" required>
                              <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                        </div>
                        <input type="submit" value="Validar" class="btn btn-primary">
                      </form>
                    </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection

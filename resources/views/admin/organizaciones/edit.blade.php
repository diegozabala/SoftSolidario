@extends('template/main')

@section('title')
  Editar datos de organizaciones {{$organizacion->nombre}}
@endsection

@section('content')

  {!! Form::open(['route'=>['solidario.orgs.update',$organizacion],'method'=>'PUT','class'=>'form-horizontal']) !!}
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-3" for="nombre">Nombre:</label>
      <div class="col-sm-3 col-md-3">
        <input class="form-control" type="text" name="nombre" value="{{$organizacion->nombre}}" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-3" for="telefono">Telefono:</label>
      <div class="col-sm-3 col-md-3">
        <input class="form-control" type="number" name="telefono" value="{{$organizacion->telefono}}" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-3" for="direccion">Direccion:</label>
      <div class="col-sm-3 col-md-3">
        <input class="form-control" type="text" name="direccion" value="{{$organizacion->direccion}}">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-3" for="razonSocial">Razón Social:</label>
      <div class="col-sm-3 col-md-3">
        <input class="form-control" type="text" name="razonSocial" value="{{$organizacion->razonSocial}}">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-2 col-sm-offset-5 col-md-2 col-md-offset-5">
        <button class="btn btn-primary" type="submit" name="editar">Registrar cambios</button>
      </div>
    </div>
  {!! Form::close() !!}

@endsection

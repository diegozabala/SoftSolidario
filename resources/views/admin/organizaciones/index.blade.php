@extends('template/main')

@section('title')
  Lista de organizaciones
@endsection

@section('content')

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-primary">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Registrar una nueva organización
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

          <!--Aqui va el formulario de registro de una nueva organizacion-->
          <form class="row" action="{{route('solidario.orgs.store')}}" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="form-group">
              <label class="control-label col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-3" for="nombre">Nombre:</label>
              <div class="col-sm-3 col-md-3">
                <input class="form-control" type="text" name="nombre" value="" placeholder="Nombre de la organizacion" required>
              </div>
            </div>
            <br><br>
            <div class="form-group">
              <label class="control-label col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-3" for="telefono">Telefono:</label>
              <div class="col-sm-3 col-md-3">
                <input class="form-control" type="number" name="telefono" value="" placeholder="Ingrese un telefono" required>
              </div>
            </div>
            <br><br>
            <div class="form-group">
              <label class="control-label col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-3" for="direccion">Dirección:</label>
              <div class="col-sm-3 col-md-3">
                <input class="form-control" type="text" name="direccion" value="" placeholder="Ingrese una dirección">
              </div>
            </div>
            <br><br>
            <div class="form-group">
              <label class="control-label col-sm-2 col-sm-offset-3 col-md-2 col-md-offset-3" for="razonSocial">Razón Social:</label>
              <div class="col-sm-3 col-md-3">
                <input class="form-control" type="text" name="razonSocial" value="" placeholder="Ingrese la razón social">
              </div>
            </div>
            <div class="form-group col-sm-2 col-sm-offset-3">
              <button class="btn btn-primary">Registrar</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>

  <hr>
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Dirección</th>
        <th>Razón Social</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($organizaciones as $organizacion)
        <tr>
          <td>{{$organizacion->nombre}}</td>
          <td>{{$organizacion->telefono}}</td>
          <td>{{$organizacion->direccion}}</td>
          <td>{{$organizacion->razonSocial}}</td>
          <td><a href=" {{ route('solidario.orgs.edit',$organizacion->id) }} " class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
          <td><a href=" {{ route('solidario.orgs.destroy',$organizacion->id) }} " class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $organizaciones->render() !!}
@endsection

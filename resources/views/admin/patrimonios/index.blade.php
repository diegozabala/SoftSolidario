@extends('template/main')

@section('title')
  Lista de Usuarios
@endsection

@section('content')

  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-primary">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Registrar un nuevo patrimonio
          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">

          <!--Aqui va el formulario de registro de un nuevo usuario-->
          <form class="row" action="{{route('solidario.patrimonios.store')}}" method="post">
            <div class="box-body">

              <div class="form-group">
                <label>Organización</label>
                <select class="form-control select2" style="width: 100%;">
                  <optgroup label="Fondos">
                    <option>FEEUQ</option>
                    <option>FEIBG</option>
                  </optgroup>

                  <optgroup label="Cooperativas">
                    <option>COODEQ</option>
                    <option>COFINCAFE</option>
                    <option>AVANZA</option>
                  </optgroup>

                  <optgroup label="Mutuales">
                  </optgroup>

                </select>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label for="anio">Año</label>
                <input type="number" class="form-control" id="anio" placeholder="Ingrese el año al que pertenece el valor del patrimonio" required>
              </div>
              <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" class="form-control" id="valor" placeholder="Ingrese el Valor/Cantidad de Dinero en Pesos Colombianos" required>
              </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Agregar</button>
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
        <th>Id</th>
        <th>IdEmpresa</th>
        <th>Año</th>
        <th>Valor</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($patrimonios as $patrimonio)
        <tr>
          <td>{{$patrimonio->id}}</td>
          <td>{{$patrimonio->idEmpresa}}</td>
          <td>{{$patrimonio->anio}}</td>
          <td>{{$patrimonio->valor}}</td>
          <td><a href=" {{ route('solidario.patrimonios.edit',$patrimonio->id) }} " class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
          <td><a href=" {{ route('solidario.patrimonios.destroy',$patrimonio->id) }} " class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>
      @endforeach
    </tbody>
  </table>

  {!! $patrimonios->render() !!}
@endsection

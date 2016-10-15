@extends('template/main')

@section('title')
  Editar datos del patrimonio{{$patrimonio->id}}
@endsection

@section('content')

  {!! Form::open(['route'=>['solidario.patrimonios.update',$patrimonio],'method'=>'PUT','class'=>'form-horizontal']) !!}

      <div class="box-body">

        <div class="form-group">
          <label>Organización</label>
          <select class="form-control select2" style="width: 100%;">
            <option selected="selected">COFINCAFE</option>
            <option>FEEUQ</option>
            <option>AVANZA</option>
            <option>COODEQ</option>
            <option>FONDO IBG</option>
          </select>
        </div><!-- /.form-group -->

        <div class="form-group">
          <label for="anio">Año</label>
          <input type="number" class="form-control" id="anio" value="{{$patrimonio->anio}}" required>
        </div>
        <div class="form-group">
          <label for="valor">Valor</label>
          <input type="number" class="form-control" id="valor" value="{{$patrimonio->valor}}" required>
        </div>
      </div><!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
  {!! Form::close() !!}

@endsection

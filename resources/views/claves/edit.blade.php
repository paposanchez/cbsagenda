
    @extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Editar Cuerpo de Bomberos: {{$cuerpo->nombre}} </h2><br  />
        <form method="post" action="{{action('CuerpoController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nombre">Cuerpo de Bomberos:</label>
            <input type="text" class="form-control" name="nombre" value="{{$cuerpo->nombre}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="fundacion">Fundacion</label>
              <input type="date" class="form-control" name="fundacion" value="{{$cuerpo->fundacion}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="direccion">Direccion:</label>
              <input type="text" class="form-control" name="direccion" value="{{$cuerpo->direccion}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Comuna</lable>
                <select name="comuna" id="comuna" class="form-control">
            <option value="">{{$cuerpo->comuna}}</option>

            @foreach($comuna as $comunas)
             <option value="{{ $comunas->comuna_nombre}}">  {{ $comunas->comuna_nombre}}</option>
            @endforeach
           </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar Cuerpo</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
@endsection
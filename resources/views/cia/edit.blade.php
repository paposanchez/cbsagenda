
    <script>
      $(document).ready(function(){
          $('.s-example-basic-multiple').select2();
       });
    </script>
    @extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Editar Compañia: {{$cia->nombre}} </h2><br  />
        <form method="post" action="{{action('CompaniaController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="nombre">Compañia:</label>
            <input type="text" class="form-control" name="nombre" value="{{$cia->nombre}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="numeral">Numeral:</label>
              <input type="text" class="form-control" name="numeral" value="{{$cia->numeral}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="fundacion">Fundacion</label>
              <input type="date" class="form-control" name="fundacion" value="{{$cia->fundacion}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="direccion">Direccion:</label>
              <input type="text" class="form-control" name="direccion" value="{{$cia->direccion}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <lable>Comuna</lable>
                <select name="comuna" id="comuna" class="js-example-basic-single">
            <option value="">{{$cia->comuna}}</option>

            @foreach($comuna as $comunas =>$value)
             <option value="{{ $comunas}}"> {{ $value }}</option>
            @endforeach
           </select>

           {{ Form::select('comuna', $comuna, ['class' => 'form-control', 'placeholder' => '- Select Role -']) }}
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar Compañia</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </div>
        </div>
      </form>
    </div>
  </body>
</html>


@endsection
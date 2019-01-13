@extends('layouts.app')


@section('content')
    
  
  <div class="container">
        <div class="row justify-content-center align-items-center">
           
            <div class="col-sm-8">
                 <div class="card">
      <div class="card-body">
                <table class="table  table-striped">
                    <tbody>
                        @foreach($cuerpos as $cb)
                        <tr>
                            <td><a href="{{URL::action('AgendaController@show',$cb->id)}}"> {{ $cb->nombre }}</a></td>
                            <td>{{ $cb->comuna }}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              {{ $cuerpos->render() }} 
            </div>
        </div>
            </div>
        <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        
                       <p class="blockquote  text-center "> Busqueda </p>
                        {{ Form::open(['route' => 'agenda.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                            <div class="form-group ">
                                {{ Form::text('nombre', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Nombre']) }}
                            </div>
                            <div class="form-group row">
                                {{ Form::text('comunaa', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'comuna']) }}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
                        {{ Form::close() }}
                    
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
@endsection

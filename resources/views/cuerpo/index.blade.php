@extends('layouts.app')


@section('content')
    <div class="container">

        <div class="row justify-content-center align-items-center">
        
        <div class="card-deck">
             <div class="col-sm-10">
    <div class="card text-center">
      <div class="card-body">
        
                       <p class="blockquote  text-center "> Buscar</p>
                       <p>Puedes Buscar Por Cuerpo de Bomberos o Comuna</p>
                        {{ Form::open(['route' => 'cuerpo.index', 'method' => 'GET', 'class' => 'form-inline pull-left text-center']) }}
                            <div class="form-group ">
                                {{ Form::text('nombre', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Nombre']) }}
                            </div>
                            <div class="form-group ">
                                {{ Form::text('comuna', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'comuna']) }}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-search"> Buscar</span>
                                </button>
                                
                            </div>
                        
                        {{ Form::close() }}
                    
      </div>
    </div>
  </div>   
            <div class="col-sm-10">
                 <div class="card">
      <div class="card-body">
                <table class="table  table-striped">
                   <thead>
    <tr>
      <th>Cuerpo de Bomberos</th>
      <th>Comuna</th>
    </tr>
  </thead>
                    <tbody>
                        @foreach($cuerpos as $cb)
                        <tr>
                            <td><a href="{{URL::action('CuerpoController@show',$cb->id)}}"> {{ $cb->nombre }}</a></td>
                            <td>{{ $cb->comuna }}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
              {{ $cuerpos->render() }} 
            </div>
        </div>
            </div>
   
</div>
        </div>
    </div>
</div>
@endsection
  
  


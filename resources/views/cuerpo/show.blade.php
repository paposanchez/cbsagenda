@extends('layouts.app')

@section('content')
                
<div class="container-fluid">
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7 border-right">
                        <h5>Cuerpo de Bomberos de {{ $cuerpo->nombre }}</h5>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-sm btn-primary">Add New</button>
                    </div>
                    
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                              <div class="form-group row">
                                <div class="col-md-12">
                                  <li class="list-group-item">
                            <div class="h5">Cuartel General</div>
                            <div class="h5">Direccion: {{ $cuerpo->direccion  }},{{ $cuerpo->comuna }}</div>
                            <div class="h5">Comuna: {{ $cuerpo->comuna }}</div>
                        </li>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="textarea" class="col-12 col-form-label">Central de Alarmas</label> 
                                <div class="col-12">
                                  <div class="text-center"> 
      @foreach( $fono as $cbfono )
        
      <a class="btn btn-outline-primary" href="#" role="button"><i class="{{ $cbfono->tipo_numero }}"></i><h3>{{ $cbfono->numero }}</h3></a> 
    
      @endforeach
    </div>
                                </div>
                              </div> 

                              <div class="form-group row">
                                <label for="textarea" class="col-12 col-form-label">Comunas Que Atiende</label> 
                                <div class="col-12">
                                  <div class="text-center"> 
      @foreach( $comuna as $com )
        
      <a class="btn btn-outline-primary" href="#" role="button"><h3>{{ $com->comuna_nombre }}</h3></a> 
    
      @endforeach
    </div>
                                </div>
                              </div> 
                            
                    </div>
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="card-header bg-light ">Compañias</div>
                                   <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Compañia</td>
            <td>Direccion</td>
            <td>Comuna</td>
            <td>acciones</td>
            
        </tr>
    </thead>
    <tbody>
    
        
 @if (!is_null($compania) && count($compania) > 0)
    @foreach( $compania as $cia )
        
        <tr>
            <td> {{ $cia->nombre }}</td>       
            <td>{{ $cia->direccion }}</td>
            <td>{{ $cia->comuna }} </td>   
             <td>{{ $ciafono->numero }} </td>          
            <td><a href="{{URL::action('CompaniaController@edit',$cia->id)}}" class="badge badge-primary">Editar</a>
              <a href="#" class="badge badge-danger">borrar</a>
              <a href="#" class="badge badge-primary "><i class="fas fa-phone"></i></span>Agregar Telefono</a>
            </td>  
            
        </tr>
 @endforeach
  @endif
    
    </tbody>
   
</table>
                                </div>
                              </div>
                              
                                </div>
                              </div> 
                            
                   

                    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
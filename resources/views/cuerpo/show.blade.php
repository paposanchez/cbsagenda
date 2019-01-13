@extends('layouts.app')

@section('content')
                
                <div class="container-fluid gedf-wrapper">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="h5">Cuerpo de Bomberos de {{ $cuerpo->nombre }}</div>
                        <div class="h7 text-muted">
                            Fundacion: {{ $cuerpo->fundacion }}
                
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="h6 text-muted">Cuartel General</div>
                            <div class="h5">Direccion: {{ $cuerpo->direccion  }},{{ $cuerpo->comuna }}</div>
                            <div class="h5">Comuna: {{ $cuerpo->comuna }}</div>
                        </li>
                        <li class="list-group-item">
                            <div class="h6 text-muted">Central Alarmas</div>
                            <div class="h5"><div class="text-center"> 
      @foreach( $fono as $cbfono )
        
      <a class="btn btn-outline-primary" href="#" role="button"><i class="{{ $cbfono->tipo_numero }}"></i><h1>{{ $cbfono->numero }}</h1></a> 
    
      @endforeach
    </div></div>
                        </li>
                        <li class="list-group-item">Redes Sociales</li>
                        <li class="list-group-item">Facebook</li>
                    </ul>
                </div>
            </div>
            

               
                

                <!--- \\\\\\\Compañias-->
                <div class="card gedf-card">
                    <div class="card-header">Compañias</div>
                        <div class="d-flex justify-content-between align-items-center">
                    
                    
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
    @foreach( $compania as $cia )
        
        <tr>
            <td> {{ $cia->nombre }}</td>       
            <td>{{ $cia->direccion }}</td>
            <td>{{ $cia->comuna }} </td>             
            <td><a href="{{URL::action('CompaniaController@edit',$cia->id)}}" class="badge badge-primary">Editar</a>
              <a href="#" class="badge badge-danger">borrar</a>
              <a href="#" class="badge badge-primary "><i class="fas fa-phone"></i></span>Agregar Telefono</a>
            </td>  
            
        </tr>
 @endforeach
  
    
    </tbody>
   
</table>
</div>
</div>
</div>
</div>
</div>
</div>

                      
                 
                <!-- Post /////-->


                
                    
                
                



          
            

@endsection
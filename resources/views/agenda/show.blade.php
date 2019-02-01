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
            <td>Teléfono</td>
            
        </tr>
    </thead>
    <tbody>
@forelse($compania as $cia2)
    <tr>
            <td>{{ $cia2->nombre }}</td>       
            <td>{{ $cia2->direccion }}</td>
            <td>{{ $cia2->comuna }} </td>             
            <td></td>  

               
        </tr>
@empty
    <tr> Compañias No registradas</tr>
@endforelse
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
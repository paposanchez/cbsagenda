@extends('layouts.app')

@section('content')
    
  <main role="main" class="container"> 
<div class="row">
  <div class="col-md-12 col-md-offset-2"> 
    
    
      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Compañias</h6>
        <div class="media text-muted pt-3">
          
        <table class="table table-striped table-bordered">
    <thead class="colortable">
        <tr>
            <td>Compañia</td>
            
            <td>Direccion</td>
            <td>Comuna</td>
            <td>Cuerpo</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
    @foreach( $compania as $cia )
        <tr>
            <td><a href="{{URL::action('CompaniaController@show',$cia->id)}}" class="link"> {{ $cia->nombre }}</a></td>
            <td>{{ $cia->direccion }}</td>
            <td>{{ $cia->comuna }} </td>             
            <td>{{ $cia->Cuerpo->nombre }} </td>

           
            <td>

                <a href="{{URL::action('CompaniaController@fono',$cia->id)}}" class="btn btn-primary pull-right btn-sm">
    Agregar Fono
</a>
            </td>
        </tr>
 @endforeach
  
    
    </tbody>
   
</table>
       
        
      </div>         


</div>
</div>
</main>

@endsection
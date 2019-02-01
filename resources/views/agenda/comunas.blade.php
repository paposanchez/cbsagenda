@extends('layouts.app')

@section('content')
    
  <main role="main" class="container">
  <div class="row">
  
  <div class="col-md-8 col-md-offset-2"> 

    <div class="panel panel-default">
                <div class="panel-heading">
                    Comunas
                    
                </div>  
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Comuna Nombre</td>
            <td>Provincia</td>
           
        </tr>
    </thead>
    <tbody>

    @foreach( $users as  $com )
        
        <tr>
            <td>{{$com->nombre}}</td>
            <td> </a></td>
            <td>{{$com->comuna_nombre}} </td>

            
        
            
            
        
                
            </td>
             
        </tr>

    @endforeach
   
    </tbody>
    
</table>

</div>
<div class="d-inline p-1  text-white">
    

</div>
<div class="d-inline p-2  text-white">
    <a href="" class="btn btn-primary pull-right">
    Agregar Tipo Carro
</a>
</div>
</div>
</main>

@endsection
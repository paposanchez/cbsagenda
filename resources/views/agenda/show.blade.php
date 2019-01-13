@extends('layouts.app')

@section('content')
  
  <div class="container">
        <div class="row">
            <div class="col-md-10">
<div class="card" >
  

  <!--<img class="card-img-top" src=".../100px180/" alt="Card image cap">-->
  <div class="card-body">

    <h1 class="card-title text-center">Cuerpo de Bomberos de {{ $cuerpo->nombre }}</h1>
    <p class="card-text text-center">Fundacion: {{ $cuerpo->fundacion }}</p>
    <p class="card-text text-center">Direccion: {{ $cuerpo->direccion }},{{ $cuerpo->comuna }}</p>
    <p class="card-text text-center">Comuna: {{ $cuerpo->comuna }}</p>
<p class="card-text text-center">
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Central: </li>
    @foreach( $fono as $cbfono )
        
        - {{ $cbfono->numero }}  -
 @endforeach
  </ol>
</nav>
  
    
</p>
  </div>
</div>

<div class="card"   >
  <div class="card-header" style="background-color: #4E93DA">Compañias</div>
  
  <div class="card-body">
   
<div class="panel panel-default">
  <div class="panel-body">
    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Compañia</td>
            <td>Direccion</td>
            <td>Comuna</td>
            
        </tr>
    </thead>
    <tbody>
    @foreach( $compania as $cia )
        
        <tr>
            <td> {{ $cia->nombre }}</td>       
            <td>{{ $cia->direccion }}</td>
            <td>{{ $cia->comuna }} </td>             

            
        </tr>
 @endforeach
  
    
    </tbody>
   
</table>

   </div>
</div>
</div>
</div>
</div>  	

 



@endsection
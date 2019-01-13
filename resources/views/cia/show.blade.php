@extends('layouts.app')

@section('content')
  
<div class="container">
        <div class="row">
            <div class="col-md-12">
<div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h1 class="card-title text-center">{{ $cia->nombre }}</h1>
        <h4 class="card-text text-center">Direccion: {{ $cia->direccion }}, {{ $cia->comuna }}</h4>
        <h4 class="card-text text-center">Cuerpo de Bomberos: {{ $cia->Cuerpo->nombre }}, </h4>
        <h4 class="card-text text-center danger ">Fono:
         	@foreach($agenda as $agenda)
                     {{ $agenda->numero }} 
    		@endforeach
		</h4>
      </div>
    </div>
  </div>
	


  	

 
</div>
</div>
</div>


@endsection
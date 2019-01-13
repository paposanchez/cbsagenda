@extends('layouts.app')

@section('content')
    
  <main role="main" class="container">
  <div class="row">
  
  <div class="col-md-8 col-md-offset-2"> 

    <div class="panel panel-default">
                <div class="panel-heading">
                    Claves Radiales
                     
                </div>  
<table class="table table-striped table-bordered">
    <thead class="colortable">
        <tr>
            <td>Clave</td>
            <td>Descripcion</td>
            <td>Modo</td>
            
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
    @foreach( $claves as $clave )
        <tr>
            <td><a href="" class="link"> {{ $clave->clave }}</a></td>
            <td>{{ $clave->descripcion }}</td>
          
            <td>{{ $clave->estado }} </td>
            
            <td>
<a href="#" class="btn btn-warning btn-danger">Editar</a></td>
        
                
            </td>
        </tr>

    @endforeach
    
    </tbody>
    
</table>

</div>
<div class="d-inline p-1  text-white"> {{ $claves->render() }} </div>

</div>
<div class="d-inline p-2  text-white">
    <a href="{{ route('clave.create') }}" class="btn btn-primary pull-right">
    Agregar Clave
</a>
</div>
</div>
</main>

@endsection

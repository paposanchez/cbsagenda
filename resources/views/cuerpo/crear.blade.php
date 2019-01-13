@extends('layouts.app')
 
@section('content')
<div class="container">
        <div class="row justify-content-center align-items-center">
         <div class="col-sm-4">
          <div class="card">
<h2 class="card-title text-center">Crear Cuerpo de Bomberos</h2>
{!! Form::open(['route' => 'cuerpo.store', 'files' => true]) !!}
                        
                        @include('cuerpo.partials.form')

                    {!! Form::close() !!}

                  </div>
                </div>
              </div>
            </div>
@stop

@extends('layouts.app')
 
@section('content')
<main role="main" class="container">
 <div class="row"> 

<h1>Agregar Compañia</h1>
<form action="{{URL::to('/')}}/cia" method="POST">
{!! csrf_field() !!}

<div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">

  <label for="url" class="control-label">
    {{ trans('Cuerpo de bombero') }}
  </label>
<select name="cuerpo_id" id="cuerpo_id" class="form-control input-sm">
  <option value="">Seleccione Cuerpo de Bomberos</option>

            @foreach($cuerpo as $cuerpo)
             <option value="{{ $cuerpo->id}}">  {{ $cuerpo->nombre}}</option>
            @endforeach
           </select>

  @if ($errors->has('cuerpo_id'))
    <div class="help-block">
      {{ $errors->first('cuerpo_id') }}
    </div>
  @endif
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

  <label for="nombre" class="control-label">
    {{ trans('nombre') }}
  </label>

  <input type="text"
         name="nombre"
         id="nombre"
         value="{{ old('nombre', @$page->name) }}"
         placeholder="Ingrese Nombre"
         required
         class="form-control">

  @if ($errors->has('nombre'))
    <div class="help-block">
      {{ $errors->first('nombre') }}
    </div>
  @endif
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

  <label for="numeral" class="control-label">
    {{ trans('numeral') }}
  </label>

  <input type="text"
         name="numeral"
         id="numeral"
         value="{{ old('numeral', @$page->name) }}"
         placeholder="Ingrese Nombre o distintivo"
         required
         class="form-control">

  @if ($errors->has('numeral'))
    <div class="help-block">
      {{ $errors->first('numeral') }}
    </div>
  @endif
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

  <label for="numeral" class="control-label">
    {{ trans('Fundacion') }}
  </label>

  <input type="date"
         name="fundacion"
         id="fundacion"
         value="{{ old('Fundacion', @$page->name) }}"
         placeholder="Ingrese Numero de Compañia."
         required
         class="form-control">

  @if ($errors->has('numeral'))
    <div class="help-block">
      {{ $errors->first('numeral') }}
    </div>
  @endif
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">

  <label for="title" class="control-label">
    {{ trans('Direccion') }}
  </label>

  <input type="text"
         name="direccion"
         id="direccion"
         value="{{ old('direccion', @$page->title) }}"
         placeholder="Ingrese Direccion"
         required
         class="form-control">

  @if ($errors->has('direccion'))
    <div class="help-block">
      {{ $errors->first('direccion') }}
    </div>
  @endif
</div>

<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">

  <label for="content" class="control-label">
    {{ trans('Comuna') }}
  </label>

      <select name="comuna" id="comuna" class="form-control input-sm">
            <option value="">Ingrese Comuna</option>

            @foreach($comuna as $comunas)
             <option value="{{ $comunas->comuna_nombre}}">  {{ $comunas->comuna_nombre}}</option>
            @endforeach
           </select>

  @if ($errors->has('content'))
    <div class="help-block">
      {{ $errors->first('content') }}
    </div>
  @endif
</div>

<div class="form-group">
  <button type="submit" class="btn btn-success">Agregar Compañia</button>
  <a href="/cuerpo" class="btn btn-default">Volver</a>
  </form>
</div>
</main>
@stop

<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
                <h4>Crear</h4>
            </div>
            <div class="modal-body">
            <main role="main" class="container">
 


<form action="{{URL::to('/')}}/cuerpo" method="POST">
{!! csrf_field() !!}

<div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">

  <label for="url" class="control-label">
    {{ trans('Cuerpo de bombero') }}
  </label>

  <input type="text"
         name="nombre"
         id="nombre"
         value="{{ old('cuerpo de bomebros', @$page->url) }}"
         placeholder="Cuerpo de Bomberos"
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

      

  @if ($errors->has('content'))
    <div class="help-block">
      {{ $errors->first('content') }}
    </div>
  @endif
</div>

<div class="form-group">
  <button type="submit" class="btn btn-success">Save</button>
  <a href="/cuerpo" class="btn btn-default">Back to list</a>
  </form>

</main>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </div>
    </div>
</div>
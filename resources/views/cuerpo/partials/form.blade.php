 @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
{{ Form::hidden('user_id', auth()->user()->id) }}


<div class="form-group">
    {{ Form::label('nombre', 'Cuerpo de Bomberos:') }}
    {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
</div>
<div class="form-group">
    {{ Form::label('fundacion', 'Fecha Fundación:') }}
    {{ Form::date('fundacion', null, ['class' => 'form-control', 'id' => 'fundacion']) }}
</div>
<div class="form-group">
    {{ Form::label('direccion', 'Direccion:') }}
    {{ Form::text('direccion', null, ['class' => 'form-control', 'id' => 'direccion']) }}
</div>

<div class="form-group">
    {{ Form::label('comuna', 'Comuna') }}
    {{ Form::select('comuna', $comuna, null, ['class' => 'form-control']) }}
</div> 


<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

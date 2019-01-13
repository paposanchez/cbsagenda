<div class="form-group">
	{{ Form::label('numero', 'Ingrese Numero') }}
	{{ Form::text('numero', null, ['class' => 'form-control', 'id' => 'numero']) }}
</div>
<div class="form-group">
	{{ Form::label('estado', 'URL Amigable') }}
	{{ Form::text('estado', null, ['class' => 'form-control', 'id' => 'estado']) }}
</div>

    
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
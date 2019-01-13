<div class="form-group">
	{{ Form::label('Numero', 'Ingrese Numero de Telefono') }}
	{{ Form::text('numero', null, ['class' => 'form-control', 'id' => 'numero']) }}
</div>


<hr>
<h3>Estado</h3>
<div class="form-group">
 	<label>{{ Form::radio('estado', 't') }} Activo</label>
 	<label>{{ Form::radio('estado', 'f') }} Inactivo</label>
</div>
{{ Form::hidden('cia_id', $cia->id) }}


<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
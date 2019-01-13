@extends('app')

@section('content')


<div  id="crud" class="row">
	
<div class="col-xs-12">
	<div class="page-header">Crud Laravel y Vuejs
		
	</div>

	<div class="col-sm-7">
		<a href="#" class="btn btn-primary pull-right">Nueva Tarea</a>

	</div>

	<table class="table table-hover table-sprite">
		
	<thead>
		<tr>
		<th>Id</th>
		<th>tarea</th>
		<th colspan="2">
			&nbsp;
		</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td width="10px">1</td>
			<td>Tarea 1</td>
			<td width="10px">
				<a href="#" class="btn tbn-warning btn-sm">Editar</a>
			</td>
			<td width="10px">
				<a href="#" class="btn tbn-danger btn-sm">Eliminar</a>
			</td>
		</tr>
	</tbody>
	</table>
</div>
<div class="col-sm-5">
	<pre>
		@{{}}
</div>
</div>




@endsection
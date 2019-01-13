
  <tbody>
    <tr>
      <td scope="row">{{ $cuerpos->id }} </td>
      <td>{{ $cuerpos->nombre }}</td>
      <td>{{ $cuerpos->direccion }}</td>
      <td>{{ $cuerpos->comuna }}</td>
    </tr>
  </tbody>
</table>
    <div class="card">
        <div class="card-header">
            ID: {{ $cuerpos->id }} -Cuerpo de Bomberos de: {{ $cuerpos->nombre }}
            {{ $cuerpos->direccion }}
            {{ $cuerpos->comuna }}
        </div>
        <div class="card-body">
            {{ $cuerpos->direccion }}
        </div>

        @if ($list)
            <div class="card-footer">
                <div class="float-right">
                    <a href="{{ route('cuerpo.show', ['id' => $cuerpos->id]) }}" class="btn btn-info">Detalle</a>
                    <a href="{{ route('cuerpo.edit', ['id' => $cuerpos->id]) }}" class="btn btn-secondary">Editar</a>

                    @if($cuerpos->trashed())
                        <form method="POST" class="float-right" action="{{ route('cuerpo.restore', ['id' => $cuerpos->id]) }}">
                            @csrf
                            @method('PUT')
                            <input type="submit" class="btn btn-default ml-2" value="Restaurar" />
                        </form>
                    @endif

                    <form method="POST" class="float-right" action="{{ route('cuerpo.destroy', ['id' => $cuerpos->id]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger ml-2" value="Eliminar" />
                    </form>
                </div>
            </div>
        @else
            <div class="card-footer">
                <div class="float-right">
                    <a href="{{ route('cuerpo.index') }}" class="btn btn-info">Listado</a>
                </div>
            </div>
        @endif
    </div>
</div>
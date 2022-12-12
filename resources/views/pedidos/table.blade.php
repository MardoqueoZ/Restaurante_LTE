<div class="table-responsive">
    <table class="table" id="pedidos-table">
        <thead>
        <tr>
            <th>Hora Pedido</th>
            <th>Fecha Pedido</th>
            <th>Cantidad Pedido</th>
            <th>Menu</th>
            <th colspan="3">Funciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->hora_pedido }}</td>
                <td>{{ $pedido->fecha_pedido }}</td>
                <td>{{ $pedido->cantidad_pedido }}</td>
                <td>{{ $pedido->menus->desc_menu}}</td>
                <td width="120">
                    {!! Form::open(['route' => ['pedidos.destroy', $pedido->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('pedidos.show', [$pedido->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('pedidos.edit', [$pedido->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

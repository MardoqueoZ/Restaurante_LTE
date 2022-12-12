<div class="table-responsive">
    <table class="table" id="reservas-table">
        <thead>
        <tr>
            <th>Hora Reserva</th>
            <th>Fecha Reserva</th>
            <th>Mesa</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservas as $reserva)
            <tr>
                <td>{{ $reserva->hora_reserva }}</td>
                <td>{{ $reserva->fecha_reserva }}</td>
                <td>{{ $reserva->mesas->desc_mesa}}</td>
                <td width="120">
                    {!! Form::open(['route' => ['reservas.destroy', $reserva->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reservas.show', [$reserva->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('reservas.edit', [$reserva->id]) }}"
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

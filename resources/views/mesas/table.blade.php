<div class="table-responsive">
    <table class="table" id="mesas-table">
        <thead>
        <tr>
            <th>Mesa</th>
            <th>Costo</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mesas as $mesa)
            <tr>
                <td>{{ $mesa->desc_mesa }}</td>
                <td>{{ $mesa->costo }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['mesas.destroy', $mesa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mesas.show', [$mesa->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('mesas.edit', [$mesa->id]) }}"
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

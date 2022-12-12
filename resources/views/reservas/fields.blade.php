<!-- Hora Reserva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_reserva', 'Hora Reserva:') !!}
    {!! Form::text('hora_reserva', null, ['class' => 'form-control','id'=>'hora_reserva']) !!}
</div>

<!-- Fecha Reserva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_reserva', 'Fecha Reserva:') !!}
    {!! Form::text('fecha_reserva', null, ['class' => 'form-control','id'=>'fecha_reserva']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('mesa_id', 'Mesa:') !!}
    {!! Form::select('mesa_id', $mesas, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion']) !!}
</div>


@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_reserva').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush
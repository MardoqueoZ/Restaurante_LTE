<!-- Fecha Reserva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_reserva', 'Fecha Reserva:') !!}
    {!! Form::text('fecha_reserva', null, ['class' => 'form-control','id'=>'fecha_reserva']) !!}
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
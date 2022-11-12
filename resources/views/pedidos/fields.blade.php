<!-- Fecha Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_pedido', 'Fecha Pedido:') !!}
    {!! Form::text('fecha_pedido', null, ['class' => 'form-control','id'=>'fecha_pedido']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha_pedido').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush
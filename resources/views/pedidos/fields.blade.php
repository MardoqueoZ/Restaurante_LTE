<!-- Hora Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_pedido', 'Hora Pedido:') !!}
    {!! Form::text('hora_pedido', null, ['class' => 'form-control','id'=>'hora_pedido']) !!}
</div>

<!-- Fecha Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_pedido', 'Fecha Pedido:') !!}
    {!! Form::text('fecha_pedido', null, ['class' => 'form-control','id'=>'fecha_pedido']) !!}
</div>

<!-- Cantidad Pedido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad_pedido', 'Cantidad Pedido:') !!}
    {!! Form::text('cantidad_pedido', null, ['class' => 'form-control','id'=>'cantidad_pedido']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('menu_id', 'Menu:') !!}
    {!! Form::select('menu_id', $menus, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion']) !!}
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
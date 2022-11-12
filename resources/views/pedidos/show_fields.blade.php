<!-- Hora Pedido Field -->
<div class="col-sm-12">
    {!! Form::label('hora_pedido', 'Hora Pedido:') !!}
    <p>{{ $pedido->hora_pedido }}</p>
</div>

<!-- Fecha Pedido Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_pedido', 'Fecha Pedido:') !!}
    <p>{{ $pedido->fecha_pedido }}</p>
</div>

<!-- Cantidad Pedido Field -->
<div class="col-sm-12">
    {!! Form::label('cantidad_pedido', 'Cantidad Pedido:') !!}
    <p>{{ $pedido->cantidad_pedido }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pedido->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pedido->updated_at }}</p>
</div>


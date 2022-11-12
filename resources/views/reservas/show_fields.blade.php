<!-- Hora Reserva Field -->
<div class="col-sm-12">
    {!! Form::label('hora_reserva', 'Hora Reserva:') !!}
    <p>{{ $reserva->hora_reserva }}</p>
</div>

<!-- Fecha Reserva Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_reserva', 'Fecha Reserva:') !!}
    <p>{{ $reserva->fecha_reserva }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $reserva->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $reserva->updated_at }}</p>
</div>


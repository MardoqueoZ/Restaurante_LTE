<!-- Desc Mesa Field -->
<div class="col-sm-12">
    {!! Form::label('desc_mesa', 'Desc Mesa:') !!}
    <p>{{ $mesa->desc_mesa }}</p>
</div>

<!-- Costo Field -->
<div class="col-sm-12">
    {!! Form::label('costo', 'Costo:') !!}
    <p>{{ $mesa->costo }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $mesa->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $mesa->updated_at }}</p>
</div>


<!-- Desc Menu Field -->
<div class="col-sm-12">
    {!! Form::label('desc_menu', 'Desc Menu:') !!}
    <p>{{ $menu->desc_menu }}</p>
</div>

<!-- Costo Field -->
<div class="col-sm-12">
    {!! Form::label('costo', 'Costo:') !!}
    <p>{{ $menu->costo }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $menu->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $menu->updated_at }}</p>
</div>


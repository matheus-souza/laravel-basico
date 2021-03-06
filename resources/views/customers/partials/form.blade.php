<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('city', 'Cidate', ['class' => 'control-label']) !!}
            {!! Form::text('city', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('state', 'Estado', ['class' => 'control-label']) !!}
            {!! Form::select('state', $customersForSelect, null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('special_customer', 'Cliente especial', ['class' => 'control-label']) !!}
            {!! Form::checkbox('special_customer', true, $customer->special_customer, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Salvar</button>
@extends('layouts.main')

@section('page-title')
    | Edição de Cliente
@stop

@section('content')

    @if(count($errors->all()) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <dt>{{ $error }}</dt>
            @endforeach
        </div>
    @endif

    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    {!! Form::model($customer, ['route' => ['clientes.update', $customer->id]]) !!}
        <input type="hidden" name="_method" value="PUT">
        @include('customers.partials.form')
    {!! Form::close() !!}
@stop

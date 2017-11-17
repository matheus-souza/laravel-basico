@extends('layouts.main')

@section('page-title')
    | Edição de Cliente
@stop

@section('content')


    {!! Form::model($customer, ['route' => ['clientes.update', $customer->id]]) !!}
        <input type="hidden" name="_method" value="PUT">
        @include('customers.partials.form')
    {!! Form::close() !!}
@stop

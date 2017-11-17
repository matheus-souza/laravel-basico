@extends('layouts.main')

@section('page-title')
    | Edição de Cliente
@stop

@section('content')

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

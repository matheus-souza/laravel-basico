@extends('layouts.main')

@section('page-title')
    | Edição de Cliente
@stop

@section('content')

    {!! Form::model($customer, ['url' => 'foo/bar']) !!}
        @include('customers.partials.form')
    {!! Form::close() !!}
@stop

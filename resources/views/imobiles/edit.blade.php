@extends('layouts.master')
@section('heading')
{{ __('Edit Imobile') }}: ({{$imobile->name}})
@stop

@section('content')
    {!! Form::model($imobile, [
            'method' => 'PATCH',
            'route' => ['imobiles.update', $imobile->id],
            ]) !!}
    @include('imobiles.form', ['submitButtonText' => __('Update imobile')])

    {!! Form::close() !!}

@stop
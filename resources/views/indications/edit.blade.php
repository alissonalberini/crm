@extends('layouts.master')
@section('heading')
{{ __('Edit Indication') }}: ({{$indication->name}})
@stop

@section('content')
    {!! Form::model($indication, [
            'method' => 'PATCH',
            'route' => ['indications.update', $indication->id],
            ]) !!}
    @include('indications.form', ['submitButtonText' => __('Update indication')])

    {!! Form::close() !!}

@stop
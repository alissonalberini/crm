@extends('layouts.master')

@section('content')
            <h3>
                {{ __('Create Indication') }}
            </h3>

    {!! Form::open([
            'route' => 'indications.store',
            ]) !!}
            
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <div class="form-group col-sm-8">
        {!! Form::label( __('Name'), 'Name:', ['class' => 'control-label']) !!}
        {!! Form::text('name', null,['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group col-sm-4">
        {!! Form::label('source', __('Source'), ['class' => 'control-label']) !!}
        {!! 
            Form::text('source',  
            isset($data['source']) ? $data['source'][0]['source'] : null, 
            ['class' => 'form-control']) 
        !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('email1', 'Email:', ['class' => 'control-label']) !!}
        {!! 
            Form::email('email1',
            isset($data['email1']) ? $data['email'] : null, 
            ['class' => 'form-control']) 
        !!}
    </div>


    <div class="form-group col-sm-6">
        {!! Form::label('email2', 'Email2:', ['class' => 'control-label']) !!}
        {!! 
            Form::email('email2',
            isset($data['email2']) ? $data['email2'] : null, 
            ['class' => 'form-control']) 
        !!}
    </div>

    
    <div class="form-group col-sm-6">
        {!! Form::label('phone1', __('Phone'), ['class' => 'control-label']) !!}
        {!! 
            Form::text('phone1',  
            isset($data['phone1']) ? $data['phone1'] : null, 
            ['class' => 'form-control']) 
        !!}
    </div>

    <div class="form-group col-sm-6">
        {!! Form::label('phone2', __('Secondary Number'), ['class' => 'control-label']) !!}
        {!! 
            Form::text('phone2',  
            isset($data['phone1']) ? $data['phone1'] : null, 
            ['class' => 'form-control']) 
        !!}
    </div>


    <div class="form-group col-sm-12">
        {!! Form::label( __('Obs'), 'Observations:', ['class' => 'control-label']) !!}
        {!! Form::textarea('obs', null, ['class' => 'form-control']) !!}
    </div>
    
    
    {!! Form::submit(__('Create Indication'), ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
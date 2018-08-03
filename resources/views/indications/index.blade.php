@extends('layouts.master')

@section('content')
    <div class="col-lg-12 currenttask">
        <table class="table table-hover">
            <h3>
                {{ __('All Indications') }}
            </h3>
            <thead>
            <thead>
            <tr>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{ __('Phone') }}</th>
                <th>{{ __('Source') }}</th>
                @if(Entrust::hasRole('administrator'))
                    <th>{{ __('Action') }}</th>
                @endif
            </tr>
            </thead>
            <tbody>
            

            @foreach($indication  as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email1}}</td>
                    <td>{{$data->phone1}}</td>
                    <td>{{$data->source}}</td>
                    @if(Entrust::hasRole('administrator'))
                    <td>   {!! Form::open([
                        'method' => 'GET',
                        'route' => ['indications.edit', $data->id]
                        ]); !!}
                        {!! Form::submit( __('Edit'), ['class' => 'btn btn-success']); !!}

                    {!! Form::close(); !!}
                    </td>
                    <td>   {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['indications.destroy', $data->id]
                        ]); !!}
                        {!! Form::submit( __('Delete'), ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Are you sure?")']); !!}

                    {!! Form::close(); !!}
                    </td>
                    @endif
                </tr>
            @endforeach


            </tbody>
        </table>

    </div>

@stop
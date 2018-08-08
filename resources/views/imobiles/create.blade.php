@extends('layouts.master')
@section('heading')
    <h1>
        {{ __('Create Imobile') }}
    </h1>
@stop

@section('content')
@push('scripts')
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip(); //Tooltip on icons top

            $('.popoverOption').each(function () {
                var $this = $(this);
                $this.popover({
                    trigger: 'hover',
                    placement: 'left',
                    container: $this,
                    html: true
                });
            });
        });
    </script>
@endpush

    <?php
    $data = Session::get('data');
    ?>

    {!! Form::open([
            'route' => 'imobiles.store',
            'class' => 'ui-form'
            ]) !!}
    @include('imobiles.form', ['submitButtonText' => __('Create New Imobile')])

    {!! Form::close() !!}


@stop

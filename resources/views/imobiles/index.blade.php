@extends('layouts.master')
@section('heading')

@stop

@section('content')

    <table class="table table-hover " id="imobiles-table">
        <thead>
        <tr>
            <th>{{ __('Name') }}</th>
            <th>{{ __('') }}</th>
            <th>{{ __('') }}</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
    </table>

@stop

@push('scripts')
<script>
    $(function () {
        $('#imobiles-table').DataTable({
            processing: true,
            serverSide: true,
            language: {
                "url": "vendor/datatables/Portuguese-Brasil.json"
            },

            ajax: '{!! route('imobiles.data') !!}',
            columns: [
                {data: 'namelink', name: 'name'},
                {data: 'public_place', name: 'public_place'},
                {data: 'value', name: 'value'},
                @if(Entrust::can('imobile-update'))   
                { data: 'edit', name: 'edit', orderable: false, searchable: false},
                @endif
                @if(Entrust::can('imobile-delete'))   
                { data: 'delete', name: 'delete', orderable: false, searchable: false},
                @endif

            ]
        });
    });
</script>
@endpush

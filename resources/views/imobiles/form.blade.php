<p>Informações Pessoais:</p>
<div class="form-group col-sm-6">
    {!! Form::label('name', __('Name'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('name',  
        isset($data['name']) ? $data['name'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('value', __('Value'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('value',  
        isset($data['value']) ? $data['value'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('public_place', __('Address'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('public_place',  
        isset($data['public_place']) ? $data['public_place'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('number', __('Number'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('number',  
        isset($data['number']) ? $data['number'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('zip_code', __('Zipcode'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('zip_code',  
        isset($data['zip_code']) ? $data['zip_code'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('neighborhood', __('Neighborhood'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('neighborhood',  
        isset($data['neighborhood']) ? $data['neighborhood'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('complement', __('Complement'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('complement',  
        isset($data['complement']) ? $data['complement'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('state_id', __('State'), ['class' => 'control-label']) !!}
    {!! Form::select('state_id', $states, null, ['class' => 'form-control ui search selection top right pointing search-select', 'id' => 'search-select']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('city_id', __('City'), ['class' => 'control-label']) !!}
    {!! Form::select('city_id', $cities, null, ['class' => 'form-control ui search selection top right pointing search-select', 'id' => 'search-select']) !!}

</div>

<div class="form-group col-sm-6">
    {!! Form::label('region_id', __('Region'), ['class' => 'control-label']) !!}
    {!! Form::select('region_id', $regions, null, ['class' => 'form-control ui search selection top right pointing search-select', 'id' => 'search-select']) !!}

</div>

<div class="form-group col-sm-6">
    {!! Form::label('count_bedroom', __('count_bedroom'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('count_bedroom',  
        isset($data['count_bedroom']) ? $data['count_bedroom'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('count_wc', __('count_wc'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('count_wc',  
        isset($data['count_wc']) ? $data['count_wc'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('count_convenient', __('count_convenient'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('count_convenient',  
        isset($data['count_convenient']) ? $data['count_convenient'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('useful_area', __('useful_area'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('useful_area',  
        isset($data['useful_area']) ? $data['useful_area'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('total_area', __('total_area'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('total_area',  
        isset($data['total_area']) ? $data['total_area'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('imobile_type', __('imobile type'), ['class' => 'control-label']) !!}
    {!! 
        Form::select('imobile_type', 
        [
        'C' => 'Casa', 
        'G' => 'C. Germinada',
        'B' => 'Bangalo',
        'E' => 'Edicula',
        'L' => 'Loft',
        'A' => 'Apartamento',
        'K' => 'Kit-net',
        'F' => 'Flat',
        'G' => 'Galpão'
        ], 
        isset($data['imobile_type']) ? $data['imobile_type'] : null, 
        ['class' => 'form-control'])
    !!}
</div>


<div class="clearfix"></div>
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}    

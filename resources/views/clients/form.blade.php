<p>Informações Pessoais:</p>
<div class="form-group col-sm-8 removeleft">
    {!! Form::label('name', __('Name'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('name',  
        isset($data['owners']) ? $data['owners'][0]['name'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-4 removeleft removeright">
    {!! Form::label('cpf_cnpj', __('Cpf/Cnpj'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('cpf_cnpj',
        isset($data['cpf_cnpj']) ? $data['cpf_cnpj'] : null, 
        ['class' => 'form-control'])
    !!}
</div>


<div class="form-group col-sm-6 removeleft">
    {!! Form::label('sex', __('sex'), ['class' => 'control-label']) !!}
    {!! 
        Form::select('size', 
        ['M' => 'Masc', 'F' => 'Fem'], 
        isset($data['sex']) ? $data['sex'] : null, 
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group col-sm-6 removeleft removeright">
    {!! Form::label('birth', __('birth'), ['class' => 'control-label']) !!}
    {!! 
        Form::date('birth',
         isset($data['birth']) ? $data['birth'] : null, 
         ['class' => 'form-control']) 
    !!}
</div>

<!--<div class="form-inline">
    <div class="form-group col-sm-6 removeleft">
        {!! Form::label('vat', 'Vat:', ['class' => 'control-label']) !!}
        {!! 
            Form::text('vat',
            isset($data['vat']) ?$data['vat'] : null,
            ['class' => 'form-control']) 
        !!}
    </div>
</div>-->

<!--Contato START-->
<p>Informações de Contato:</p>
<div class="form-group col-sm-6 removeleft">
    {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
    {!! 
        Form::email('email',
        isset($data['email']) ? $data['email'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>


<div class="form-group col-sm-6 removeleft removeright">
    {!! Form::label('email2', 'Email2:', ['class' => 'control-label']) !!}
    {!! 
        Form::email('email2',
        isset($data['email2']) ? $data['email2'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-inline">
    <div class="form-group col-sm-6 removeleft">
        {!! Form::label('primary_number', __('Phone'), ['class' => 'control-label']) !!}
        {!! 
            Form::text('primary_number',  
            isset($data['phone']) ? $data['phone'] : null, 
            ['class' => 'form-control']) 
        !!}
    </div>

    <div class="form-group col-sm-6 removeleft removeright">
        {!! Form::label('secondary_number', __('Secondary Number'), ['class' => 'control-label']) !!}
        {!! 
            Form::text('secondary_number',  
            null, 
            ['class' => 'form-control']) 
        !!}
    </div>
</div>
<!--Contato END-->

<!--Endereço START-->
<p>Informações de Endereço:</p>
<div class="form-group col-sm-6 removeleft">
    {!! Form::label('address', __('Address'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('address',
        isset($data['address']) ? $data['address'] : null, 
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group col-sm-3 removeleft">
    {!! Form::label('number', __('Number'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('number',
         isset($data['number']) ? $data['number'] : null, 
         ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-3 removeleft removeright">
    {!! Form::label('zipcode', __('Zipcode'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('zipcode',
         isset($data['zipcode']) ? $data['zipcode'] : null, 
         ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-12 removeleft removeright">
    {!! Form::label('city', __('City'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('city',
        isset($data['city']) ? $data['city'] : null,
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6 removeleft">
    {!! Form::label('neighborhood', __('Nighborhood'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('neighborhood',
        isset($data['neighborhood']) ? $data['neighborhood'] : null, 
        ['class' => 'form-control'])
    !!}
</div>

<div class="form-group col-sm-6 removeleft removeright">
    {!! Form::label('complement', __('Complement'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('complement',
        isset($data['complement']) ? $data['complement'] : null, 
        ['class' => 'form-control'])
    !!}
</div>

<!--Endereço START-->

<!--Profissional-->
<!--Contato START-->
<p>Informações Profissionais:</p>
<div class="form-group col-sm-6 removeleft">
    {!! Form::label('company_name', __('Company name'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('company_name',
        isset($data['name']) ? $data['name'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6 removeleft removeright">

    {!! Form::label('company_type', __('Company type'), ['class' => 'control-label']) !!}
    {!!
        Form::text('company_type',
        isset($data['companydesc']) ? $data['companydesc'] : null,
        ['class' => 'form-control'])
    !!}
</div>
<div class="form-group col-sm-4 removeleft">
    {!! Form::label('industry', __('Industry'), ['class' => 'control-label']) !!}
    {!!
        Form::select('industry_id',
        $industries,
        null,
        ['class' => 'form-control ui search selection top right pointing search-select',
        'id' => 'search-select'])
    !!}
</div>

<div class="form-group col-sm-4 removeleft">
    {!! Form::label('profession', __('Profession name'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('profession',
        isset($data['profession']) ? $data['profession'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-4 removeleft">
    {!! Form::label('income', __('Income'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('income',
         isset($data['income']) ? $data['income'] : null, 
         ['class' => 'form-control']) 
    !!}
</div>

<p>Informações de interesse:</p>

<div class="form-group col-sm-6 removeleft">
    {!! Form::label('region_interest', __('region interest'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('region_interest',
        isset($data['region_interest']) ? $data['region_interest'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6 removeleft">
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

<div class="form-group col-sm-3 removeleft">
    {!! Form::label('value_min', __('value min'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('value_min',
         isset($data['value_min']) ? $data['value_min'] : null, 
         ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-3 removeleft">
    {!! Form::label('value_max', __('value max'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('value_max',
         isset($data['value_max']) ? $data['value_max'] : null, 
         ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-3 removeleft">
    {!! Form::label('dormitory_min', __('dormitory min'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('dormitory_min',
         isset($data['dormitory_min']) ? $data['dormitory_min'] : null, 
         ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-3 removeleft">
    {!! Form::label('dormitory_max', __('dormitory max'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('dormitory_max',
         isset($data['dormitory_max']) ? $data['dormitory_max'] : null, 
         ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-3 removeleft">
    {!! Form::label('wc_min', __('wc min'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('wc_min',
         isset($data['wc_min']) ? $data['wc_min'] : null, 
         ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-3 removeleft">
    {!! Form::label('wc_max', __('wc max'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('wc_max',
         isset($data['wc_max']) ? $data['wc max'] : null, 
         ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-3 removeleft">
    {!! Form::label('useful_area_min', __('useful area min'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('useful_area_min',
         isset($data['useful_area_min']) ? $data['useful_area_min'] : null, 
         ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-3 removeleft">
    {!! Form::label('useful_area_max', __('useful area max'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('useful_area_max',
         isset($data['useful_area_max']) ? $data['useful_area_max'] : null, 
         ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6 removeleft">
    {!! Form::label('total_area_min', __('total area min'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('total_area_min',
         isset($data['total_area_min']) ? $data['total_area_min'] : null, 
         ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6 removeleft">
    {!! Form::label('total_area_max', __('total area max'), ['class' => 'control-label']) !!}
    {!! 
        Form::number('total_area_max',
         isset($data['total_area_max']) ? $data['total_area_max'] : null, 
         ['class' => 'form-control']) 
    !!}
</div>

<div class="clearfix"></div>

<div class="form-group col-sm-6 removeleft">
    {!! Form::label('user_id', __('Assign user'), ['class' => 'control-label']) !!}
    {!! Form::select('user_id', $users, null, ['class' => 'form-control ui search selection top right pointing search-select', 'id' => 'search-select']) !!}

</div>

<div class="clearfix"></div>
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}    

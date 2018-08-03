<p>Informações Pessoais:</p>
<div class="form-group col-sm-8 removeleft">
    {!! Form::label('name', __('Name'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('name',  
        isset($data['name']) ? $data['name'][0]['name'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-4 removeleft removeright">
    {!! Form::label('source', __('Source'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('source',  
        isset($data['source']) ? $data['source'][0]['source'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>

<div class="form-group col-sm-6 removeleft">
    {!! Form::label('email1', 'Email:', ['class' => 'control-label']) !!}
    {!! 
        Form::email('email1',
        isset($data['email1']) ? $data['email'] : null, 
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
        {!! Form::label('phone1', __('Phone'), ['class' => 'control-label']) !!}
        {!! 
            Form::text('phone1',  
            isset($data['phone1']) ? $data['phone1'] : null, 
            ['class' => 'form-control']) 
        !!}
    </div>

    <div class="form-group col-sm-6 removeleft removeright">
        {!! Form::label('phone2', __('Secondary Number'), ['class' => 'control-label']) !!}
        {!! 
            Form::text('phone2',  
            isset($data['phone1']) ? $data['phone1'] : null, 
            ['class' => 'form-control']) 
        !!}
    </div>
</div>

<div class="form-group col-sm-12 removeleft removeright">
    {!! Form::label('obs', __('Obs'), ['class' => 'control-label']) !!}
    {!! 
        Form::text('obs',  
        isset($data['owners']) ? $data['owners'][0]['name'] : null, 
        ['class' => 'form-control']) 
    !!}
</div>


<div class="clearfix"></div>
{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}    

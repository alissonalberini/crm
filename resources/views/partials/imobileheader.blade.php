<div class="col-md-6">

    <h1 class="moveup">{{$imobile->name}}</h1>

    <!--Client info leftside-->
    <div class="contactleft">
        @if($imobile->public_place != "")

        <p>
            <span class="glyphicon glyphicon-home" 
                  aria-hidden="true" 
                  data-toggle="tooltip" 
                  title="{{ __('Full address') }}" 
                  data-placement="left"> 
            </span> 
            {{ __('Address') }} : {{ $imobile->public_place }}
            <br/>
            {{ __('Number') }} : {{ $imobile->number }} 
            
            {{ __('Zip_code') }} : {{ $imobile->zip_code }}
            
            {{ __('Complement') }} : {{ $imobile->complement }}
            
            {{ __('State') }} : {{ $imobile->state_id }}
            
            {{ __('City') }} : {{ $imobile->city_id }}
            
            {{ __('Region') }} : {{ $imobile->region_id }}
        </p>
        @endif
    </div>

</div>

<div class="col-lg-4">

    <div class="profilepic"><img class="profilepicsize" src="../images/default_avatar.jpg" /></div>
    <h1>{{ $imobile->number }} </h1>

    <!--MAIL-->
    <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
        <a href="mailto:{{ $imobile->number }}">{{ $imobile->number }}</a></p>
    <!--Work Phone-->
    <p><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span>
        <a href="tel:{{ $imobile->number }}">{{ $imobile->number }}</a></p>

    <!--Personal Phone-->
    <p><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
        <a href="tel:{{ $imobile->number }}">{{ $imobile->number }}</a></p>

    <!--Address-->
    <p><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
        {{ $imobile->address }}  </p>
</div>



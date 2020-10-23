@component('mail::message')
<h1>Hello From Your Website {{ $settings->site_name  }}</h1>
    # Introduction

<h2>Name : {{ $details['name'] }}</h2>
<h3>E-mail : {{ $details['email'] }}</h3>
<p>Subject :{{ $details['subject'] }}</p>
<p>Message :{{ $details['message'] }}</p>


@component('mail::button', ['url' =>  url('/')])
Back To Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

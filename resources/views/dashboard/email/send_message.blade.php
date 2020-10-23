@component('mail::message')
# Introduction
<p>Hi , {{ $data['email']  }} !</p>
<p>Your Subject : {{ $data['subject']  }}</p>
<p>{!! $data['message'] !!} </p>
@component('mail::button', ['url' => '/'])
Back to website
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent

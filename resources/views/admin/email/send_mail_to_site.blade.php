# Introduction
<h3>From your Websit -{{ $details['site_name']  }}-</h3>
<h4> Hi, I'm  {{ $details['name'] }}</h4>
<h5> E-mail :{{ $details['email'] }} </h5>
<p>Subject:{{ $details['subject']  }} </p>
<p>Message:{{ $details['message']  }} </p>
Thanks,<br>
{{ config('app.name') }}

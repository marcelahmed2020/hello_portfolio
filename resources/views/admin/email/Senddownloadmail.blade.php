# Introduction
<h3>It Is From your Websit </h3>
<h4>  {{ $data['name'] }} And His E-mail {{ $data['email'] }} </h4>
<h6>He Want Download Your Portflio Pdf </h6>
<h6> <a href="{{ url('/accept/download/'.$data['random_download']) }}">Accept</a> </h6>
<h6> <a href="{{ url('/cancel/download/'.$data['random_download']) }}">Cancel</a> </h6>
 Thanks,<br>
{{ config('app.name') }}

# Introduction
<h3>Hi  {{ $data['name'] }} , We {{ sitesetting()->site_name }} </h3>
<h6>You Ask Us To Download Our Portflio Link ,You Can Download It Now  </h6>
<h6> <a href="{{ url('/download/now/'.$data['random_download']) }}">Download Now</a> </h6>
  Thanks,<br>
{{ config('app.name') }}

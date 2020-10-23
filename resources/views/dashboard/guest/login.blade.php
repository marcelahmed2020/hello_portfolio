@section('site_name',__('site.login'))
@extends('dashboard.guest.guest')
@section('content')
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">@lang('site.welcome_back')!</h1>
                                </div>
                                <form class="user" method="post" id="mylogin" action="{{ route('admin.login')  }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email"  id="email" aria-describedby="email" class="form-control form-control-user" placeholder="@lang('site.email')">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password"  id="password"  class="form-control form-control-user" id="password" placeholder="@lang('site.password')">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" name="remember" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">@lang('site.remember_me')</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        @lang('site.login')
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('admin.forgot-password') }}"> @lang('site.forgot_password')?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection


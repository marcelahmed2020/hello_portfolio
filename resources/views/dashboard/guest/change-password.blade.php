@section('site_name',' | Change Password')
@extends('dashboard.guest.guest')
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">change your password!!</h1> <hr>
                                </div>
                                <form class="user" method="post" id="mychange-password" action="{{ route('admin.change-password',$user->id) }}">
                                    @csrf
                                    {{  method_field('PUT')  }}
                                    <div class="form-group">
                                        <input type="password" name="password"  id="password" aria-describedby="password" class="form-control form-control-user" placeholder="Password...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation"  id="password_confirmation" aria-describedby="password_confirmation" class="form-control form-control-user" placeholder="Password Confirmation...">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Change Password
                                    </button>
                                </form>

                                </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

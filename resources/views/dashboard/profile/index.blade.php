@section('site_name',' | '. $my_info->name)
@extends('dashboard.layouts._app')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">@lang('site.dashboard')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('site.profile')  #{{$my_info->name}}</li>
            </ol>
        </nav>
        <form action="{{ route('admin.profile.update',$my_info->id) }}" id="form_validation" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{  method_field('PUT') }}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">@lang('site.name') </label>
                                        <input type="text"  class="form-control" placeholder="@lang('site.name')" value="{{ $my_info->name   }}" name="name" id="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">@lang('site.email') </label>
                                        <input type="email"  class="form-control" placeholder="@lang('site.email')" value="{{ $my_info->email   }}" name="email" id="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">@lang('site.password') </label>
                                        <input type="password"  class="form-control" placeholder="@lang('site.password')" value="{{ old('password')  }}" name="password" id="password">
{{--                                        <input type="password"  class="form-control" placeholder="@lang('site.password')" value="{{ old('password')  }}" name="password" id="password">--}}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="min_image">@lang('site.min_image') </label>
                                        <input type="file"  class="form-control" placeholder="@lang('site.min_image')" value="{{ old('min_image')  }}" name="min_image" id="min_image">
                                        <input type="hidden" value="{{ $my_info->min_image   }}" name="old_min_image">

                                    </div>
                                </div><div class="col-md-12">
                                    <div class="form-group">
                                        <label for="max_image">@lang('site.max_image') </label>
                                        <input type="file"  class="form-control" placeholder="@lang('site.max_image')" value="{{ old('max_image')  }}" name="max_image" id="max_image">
                                        <input type="hidden"  value="{{ $my_info->max_image   }}" name="old_max_image">
                                    </div>
                                </div>



                            </div>

                        </div>



                        <br><button type="submit" class="btn btn-primary"> <i class="fa fa-edit"></i> @lang('site.update')</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

 @endsection

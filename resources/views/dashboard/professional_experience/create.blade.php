@section('site_name',' | '.__('site.add_education'))
@extends('dashboard.layouts._app')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">@lang('site.dashboard')</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.professional_experiences.index')  }}">@lang('site.professional_experiences')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('site.add_education')</li>
            </ol>
        </nav>
        <form action="{{ route('admin.professional_experiences.store') }}" id="form_validation" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                            @foreach (config('translatable.locales') as  $locale)
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="{{$locale.'.title'}}">@lang('site.'.$locale.'.title') </label>
                                    <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.title')" value="{{ old('$locale[title]')  }}" name="{{$locale}}[title]" id="{{$locale.'.title'}}">

                                </div>
                            </div>
                            @endforeach
                      @foreach (config('translatable.locales') as  $locale)
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="{{$locale.'.sub_title'}}">@lang('site.'.$locale.'.sub_title') </label>
                                    <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.sub_title')" value="{{ old('$locale[sub_title]')  }}" name="{{$locale}}[sub_title]" id="{{$locale.'.sub_title'}}">

                                </div>
                            </div>
                            @endforeach

                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="{{$locale.'.desc1'}}">@lang('site.'.$locale.'.desc1') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.desc1')" value="{{ old('$locale[desc1]')  }}" name="{{$locale}}[desc1]" id="{{$locale.'.desc1'}}">
                                        </div>
                                    </div>
                                @endforeach


  @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="{{$locale.'.desc2'}}">@lang('site.'.$locale.'.desc2') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.desc2')" value="{{ old('$locale[desc2]')  }}" name="{{$locale}}[desc2]" id="{{$locale.'.desc2'}}">
                                        </div>
                                    </div>
                                @endforeach


  @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="{{$locale.'.desc3'}}">@lang('site.'.$locale.'.desc3') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.desc3')" value="{{ old('$locale[desc3]')  }}" name="{{$locale}}[desc3]" id="{{$locale.'.desc3'}}">
                                        </div>
                                    </div>
                                @endforeach





                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="from">@lang('site.from') </label>
                                        <input type="text"  class="form-control" placeholder="@lang('site.from') - 2016-01-06" value="{{ old('from')  }}" name="from" id="from">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="to">@lang('site.to') </label>
                                        <input type="text"  class="form-control" placeholder="@lang('site.to') - {{date("Y-m-d")}}" value="{{ old('to')  }}" name="to" id="to">
                                    </div>
                                </div>

                            </div>




                            <div class="form-check">
                                <input type="checkbox"  checked value="1" name="enabled"  class="form-check-input" id="enabled">
                                <label class="form-check-label" for="enabled">@lang('site.visiblity')</label>
                            </div>

                            <br><button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>
                    </div>
                </div>
{{--                <div class="col-lg-2">--}}

{{--                    <!-- Default Card Example -->--}}
{{--                    <div class="card shadow  mb-4">--}}
{{--                        <div class="card-header">--}}
{{--                            @lang('site.info')--}}
{{--                        </div>--}}
{{--                        <small class="card-body">--}}
{{--                            @if (! empty(auth()->user()))--}}
{{--                                @if (auth()->user()->admin == 1)--}}
{{--                                <a href="{{ route('admins.show',auth()->user()->id)  }}">Admin : {{'@'.auth()->user()->username}}</a>--}}
{{--                                @else--}}
{{--                                <a href="{{ route('users.show',auth()->user()->id)  }}">User : {{'@'.auth()->user()->username}}</a>--}}
{{--                                @endif--}}
{{--                                <br>--}}
{{--                            @endif--}}
{{--                            <div class="my-2"></div>--}}
{{--                        </small>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </form>

   </div>
@endsection

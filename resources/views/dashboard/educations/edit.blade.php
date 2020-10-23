@section('site_name',' | '.$education->title)
@extends('dashboard.layouts._app')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">@lang('site.dashboard')</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.educations.index')  }}">@lang('site.educations')</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$education->title}}</li>
            </ol>
        </nav>
             <form action="{{ route('admin.educations.update',$education->id) }}" id="form_validation" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{  method_field('PUT') }}            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="{{$locale.'.title'}}">@lang('site.'.$locale.'.title') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.title')" value="{{! empty($education->translate($locale)->title)?$education->translate($locale)->title:''}}" name="{{$locale}}[title]" id="{{$locale.'.title'}}">

                                        </div>
                                    </div>
                                @endforeach
                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="{{$locale.'.sub_title'}}">@lang('site.'.$locale.'.sub_title') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.sub_title')" value="{{! empty($education->translate($locale)->sub_title)?$education->translate($locale)->sub_title:''}}" name="{{$locale}}[sub_title]" id="{{$locale.'.sub_title'}}">

                                        </div>
                                    </div>
                                @endforeach

                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="{{$locale.'.desc'}}">@lang('site.'.$locale.'.desc') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.desc')"  value="{{! empty($education->translate($locale)->desc)?$education->translate($locale)->desc:''}}" name="{{$locale}}[desc]" id="{{$locale.'.desc'}}">
                                        </div>
                                    </div>
                                @endforeach





                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="from">@lang('site.from') </label>
                                        <input type="text"  class="form-control" placeholder="@lang('site.from') - 2016-01-06" value="{{ $education->from    }}" name="from" id="from">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="to">@lang('site.to') </label>
                                        <input type="text"  class="form-control" placeholder="@lang('site.to') - {{date("Y-m-d")}}" value="{{ $education->to    }}" name="to" id="to">
                                    </div>
                                </div>

                            </div>




                            <div class="form-check">
                                <input type="checkbox" {{$education->enabled == 1 ? 'checked':''}} value="1" name="enabled"  class="form-check-input" id="enabled">
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

@section('site_name',' | '.__('site.edit').' / '. $about->title)
@extends('dashboard.layouts._app')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">@lang('site.dashboard')</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.aboutus.index')  }}">@lang('site.aboutus')</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{__('site.edit').' | '. $about->title  }}</li>
            </ol>
        </nav>
        <form action="{{ route('admin.aboutus.update',$about->id) }}" id="form_validation" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{  method_field('PUT') }}
            <div class="row">
                <div class="col-lg-10">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="{{$locale.'.title'}}">@lang('site.'.$locale.'.title') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.title')" value="{{! empty($about->translate($locale)->title)?$about->translate($locale)->title:''}}" name="{{$locale}}[title]" id="{{$locale.'.name'}}">

                                        </div>
                                    </div>
                                @endforeach
                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="{{$locale.'.sub_title'}}">@lang('site.'.$locale.'.sub_title') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.sub_title')"  value="{{! empty($about->translate($locale)->sub_title)?$about->translate($locale)->sub_title:''}}"  name="{{$locale}}[sub_title]" id="{{$locale.'.sub_title'}}">
                                        </div>
                                    </div>
                                @endforeach
                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="{{$locale.'.address'}}">@lang('site.'.$locale.'.address') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.address')"  value="{{! empty($about->translate($locale)->address)?$about->translate($locale)->address:''}}" name="{{$locale}}[address]"  id="{{$locale.'.address'}}">
                                        </div>
                                    </div>
                                @endforeach

                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="{{$locale.'.freelance'}}">@lang('site.'.$locale.'.freelance') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.freelance_available')"   value="{{! empty($about->translate($locale)->freelance)?$about->translate($locale)->freelance:''}}"  name="{{$locale}}[freelance]" id="{{$locale.'.sub_title'}}">                                </div>
                                    </div>
                                @endforeach
                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="{{$locale.'.degree'}}">@lang('site.'.$locale.'.degree') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.degree')"    value="{{! empty($about->translate($locale)->degree)?$about->translate($locale)->degree:''}}"   name="{{$locale}}[degree]" id="{{$locale.'.degree'}}">                                </div>
                                    </div>
                                @endforeach
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">@lang('site.phone') </label>
                                        <input type="number"  class="form-control" placeholder="@lang('site.phone')" value="{{ $about->phone   }}" name="phone" id="phone">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="birthday">@lang('site.birthday') </label>
                                        <input type="date"  class="form-control" placeholder="@lang('site.birthday')" value="{{ $about->birthday   }}" name="birthday" id="birthday">

                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">@lang('site.email') </label>
                                        <input type="email"  class="form-control" placeholder="@lang('site.email')" value="{{ $about->email   }}" name="email" id="email">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="image">@lang('site.image') </label>
                                        <input type="file"  class="form-control" placeholder="@lang('site.image')" value="{{ old('image')  }}" name="image" id="image">
                                        <input type="hidden" value="{{ $about->image   }}" name="old_image">

                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-12">
                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="form-group">
                                        <label for="{{$locale.'.desc'}}">@lang('site.'.$locale.'.description') </label>
                                        <textarea   class="form-control"  placeholder="@lang('site.'.$locale.'.description')"  name="{{$locale}}[desc]" id="{{$locale.'.desc'}}" rows="10" cols="80">{{! empty($about->translate($locale)->desc)?$about->translate($locale)->desc:''}}</textarea>
                                    </div>
                                @endforeach

                            </div>



                            <div class="form-check">
                                <input type="checkbox"  checked value="1" name="enabled"  class="form-check-input" id="enabled">
                                <label class="form-check-label" for="enabled">@lang('site.visiblity')</label>
                            </div>

                            <br><button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> @lang('site.edit')</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">

                    <!-- Default Card Example -->
                    <div class="card shadow  mb-4">
                        <div class="card-header">
                            @lang('site.info')
                        </div>
                        <small class="card-body">
                            {{--                            @if (! empty(auth()->user()))--}}
                            {{--                                @if (auth()->user()->admin == 1)--}}
                            {{--                                <a href="{{ route('admins.show',auth()->user()->id)  }}">Admin : {{'@'.auth()->user()->username}}</a>--}}
                            {{--                                @else--}}
                            {{--                                <a href="{{ route('users.show',auth()->user()->id)  }}">User : {{'@'.auth()->user()->username}}</a>--}}
                            {{--                                @endif--}}
                            {{--                                <br>--}}
                            {{--                            @endif--}}
                            <div class="my-2"></div>
                        </small>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection

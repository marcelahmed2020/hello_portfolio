@section('site_name',' | '.__('site.edit').' / '. $price->title)
@extends('dashboard.layouts._app')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">@lang('site.dashboard')</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.prices.index')  }}">@lang('site.prices')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('site.edit') / {{$price->title}}</li>
            </ol>
        </nav>
             <form action="{{ route('admin.prices.update',$price->id) }}" id="form_validation" method="post" enctype="multipart/form-data">

                {{ csrf_field() }}
                {{  method_field('PUT') }}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="{{$locale.'.title'}}">@lang('site.'.$locale.'.title') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.title')" value="{{! empty($price->translate($locale)->title)?$price->translate($locale)->title:''}}" name="{{$locale}}[title]" id="{{$locale.'.name'}}">

                                        </div>
                                    </div>
                                @endforeach
                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="{{$locale.'.sub_title'}}">@lang('site.'.$locale.'.sub_title') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.sub_title')" value="{{! empty($price->translate($locale)->sub_title)?$price->translate($locale)->sub_title:''}}" name="{{$locale}}[sub_title]" id="{{$locale.'.sub_title'}}">                                </div>
                                    </div>
                                @endforeach
                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="{{$locale.'.desc1'}}">@lang('site.'.$locale.'.desc1') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.desc1')" value="{{! empty($price->translate($locale)->desc1)?$price->translate($locale)->desc1:'0'}}" name="{{$locale}}[desc1]" id="{{$locale.'.desc1'}}">                                </div>
                                    </div>
                                @endforeach

                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="{{$locale.'.desc2'}}">@lang('site.'.$locale.'.desc2') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.desc2')" value="{{! empty($price->translate($locale)->desc2)?$price->translate($locale)->desc2:'0'}}" name="{{$locale}}[desc2]" id="{{$locale.'.desc2'}}">                                </div>
                                    </div>
                                @endforeach
                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="{{$locale.'.desc3'}}">@lang('site.'.$locale.'.desc3') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.desc3')" value="{{! empty($price->translate($locale)->desc3)?$price->translate($locale)->desc3:'0'}}" name="{{$locale}}[desc3]" id="{{$locale.'.desc3'}}">
                                        </div>
                                    </div>
                                @endforeach
                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="{{$locale.'.footer_desc'}}">@lang('site.'.$locale.'.footer_desc') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.footer_desc')" value="{{! empty($price->translate($locale)->footer_desc)?$price->translate($locale)->footer_desc:'0'}}" name="{{$locale}}[footer_desc]" id="{{$locale.'.footer_desc'}}">
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="price">@lang('site.price') </label>
                                        <input type="text"  class="form-control" placeholder="@lang('site.price')" value="{{ $price->price   }}" name="price" id="price">

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

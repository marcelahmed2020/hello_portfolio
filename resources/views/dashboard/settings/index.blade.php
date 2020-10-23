@section('site_name',' | '.__('site.settings'))
@extends('dashboard.layouts._app')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">@lang('site.dashboard')</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.settings.index')  }}">@lang('site.settings')</a></li>
            </ol>
        </nav>
        <form action="{{ route('admin.settings.update',$settings->id) }}" id="form_validation" method="post" enctype="multipart/form-data">
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
                                            <label for="{{$locale.'.site_name'}}">@lang('site.'.$locale.'.site_name') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.site_name')" value="{{! empty($settings->translate($locale)->site_name)?$settings->translate($locale)->site_name:''}}" name="{{$locale}}[site_name]" id="{{$locale.'.site_name'}}">

                                        </div>
                                    </div>
                                @endforeach
                        @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="{{$locale.'.adress'}}">@lang('site.'.$locale.'.adress') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.adress')" value="{{! empty($settings->translate($locale)->adress)?$settings->translate($locale)->adress:''}}" name="{{$locale}}[adress]" id="{{$locale.'.adress'}}">

                                        </div>
                                    </div>
                                @endforeach

                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="{{$locale.'.description'}}">@lang('site.'.$locale.'.description') </label>
                                            <textarea   class="form-control" placeholder="@lang('site.'.$locale.'.description')" name="{{$locale}}[description]" id="{{$locale.'.description'}}"  rows="8">{{! empty($settings->translate($locale)->description)?$settings->translate($locale)->description:''}}</textarea>
                                         </div>
                                    </div>
                                @endforeach

                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="{{$locale.'.keywords'}}">@lang('site.'.$locale.'.keywords') </label>
                                            <textarea   class="form-control" placeholder="@lang('site.'.$locale.'.keywords')" name="{{$locale}}[keywords]" id="{{$locale.'.keywords'}}"  rows="8">{{! empty($settings->translate($locale)->keywords)?$settings->translate($locale)->keywords:''}}</textarea>
                                         </div>
                                    </div>
                                @endforeach

                                @foreach (config('translatable.locales') as  $locale)
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="{{$locale.'.message_maintenance'}}">@lang('site.'.$locale.'.message_maintenance') </label>
                                            <textarea   class="form-control" placeholder="@lang('site.'.$locale.'.message_maintenance')" name="{{$locale}}[message_maintenance]" id="{{$locale.'.message_maintenance'}}"  rows="8">{{! empty($settings->translate($locale)->message_maintenance)?$settings->translate($locale)->message_maintenance:''}}</textarea>
                                         </div>
                                    </div>
                                @endforeach




                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone1">@lang('site.phone') </label>
                                        <input type="text"  class="form-control" placeholder="@lang('site.phone')" value="{{ $settings->phone1   }}" name="phone1" id="phone1">
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">@lang('site.email') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.email')" value="{{ $settings->email   }}" name="email" id="email">
                                        </div>
                                    </div>

                                <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="facebook">@lang('site.facebook') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.facebook')" value="{{ $settings->facebook   }}" name="facebook" id="facebook">
                                        </div>
                                </div>
                                <div class="input-group-addon col-sm-1">
                                          <label for="facebook_status"></label>
                                          <input type="checkbox" name="facebook_status" class="filled-in" value="1" {{ $settings->facebook_status == 1 ? 'checked':'' }}   id="facebook_status">
                                </div>


                                <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="twitter">@lang('site.twitter') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.twitter')" value="{{ $settings->twitter   }}" name="twitter" id="twitter">
                                        </div>
                                </div>
                                <div class="input-group-addon col-sm-1">
                                          <label for="twitter_status"></label>
                                          <input type="checkbox" name="twitter_status" class="filled-in" value="1" {{ $settings->twitter_status == 1 ? 'checked':'' }}   id="twitter_status">
                                </div>




                                <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="vk">@lang('site.vk') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.vk')" value="{{ $settings->vk   }}" name="vk" id="vk">
                                        </div>
                                </div>
                                <div class="input-group-addon col-sm-1">
                                          <label for="vk_status"></label>
                                          <input type="checkbox" name="vk_status" class="filled-in" value="1" {{ $settings->vk_status == 1 ? 'checked':'' }}   id="vk_status">
                                </div>

                                <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="telegram">@lang('site.telegram') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.telegram')" value="{{ $settings->telegram   }}" name="telegram" id="telegram">
                                        </div>
                                </div>
                                <div class="input-group-addon col-sm-1">
                                          <label for="telegram_status"></label>
                                          <input type="checkbox" name="telegram_status" class="filled-in" value="1" {{ $settings->telegram_status == 1 ? 'checked':'' }}   id="telegram_status">
                                </div>





                                <div class="col-sm-5">
                                        <div class="form-group">
                                            <label for="whatsapp">@lang('site.whatsapp') </label>
                                            <input type="text"  class="form-control" placeholder="@lang('site.whatsapp')" value="{{ $settings->whatsapp   }}" name="whatsapp" id="whatsapp">
                                        </div>
                                </div>
                                <div class="input-group-addon col-sm-1">
                                          <label for="whatsapp_status"></label>
                                          <input type="checkbox" name="whatsapp_status" class="filled-in" value="1" {{ $settings->whatsapp_status == 1 ? 'checked':'' }}   id="whatsapp_status">
                                </div>









                            </div>








                            <div class="form-check">
                                <input type="checkbox"  checked value="1" name="closed"  class="form-check-input" id="closed">
                                <label class="form-check-label" for="closed">@lang('site.opend')</label>
                            </div>

                            <br><button type="submit" class="btn btn-primary"> <i class="fa fa-edit"></i> @lang('site.update')</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>
@endsection

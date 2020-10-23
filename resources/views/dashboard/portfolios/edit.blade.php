@section('site_name',' | '. $portfolio->title)
@extends('dashboard.layouts._app')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">@lang('site.dashboard')</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.portfolios.index')  }}">@lang('site.portfolios')</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$portfolio->title}}</li>
            </ol>
        </nav>
        <form action="{{ route('admin.portfolios.update',$portfolio->id) }}" id="form_validation" method="post" enctype="multipart/form-data">

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
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.title')"  value="{{! empty($portfolio->translate($locale)->title)?$portfolio->translate($locale)->title:''}}"  name="{{$locale}}[title]" id="{{$locale.'.name'}}">

                                        </div>
                                    </div>
                                @endforeach

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="links">@lang('site.links') </label>
                                        <input type="text"  class="form-control" placeholder="@lang('site.links')" value="{{ $portfolio->links    }}" name="links" id="links">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="image">@lang('site.image') </label>
                                        <input type="file"  class="form-control" placeholder="@lang('site.image')" value="{{ old('image')  }}" name="image" id="image">
                                        <input type="hidden"   value="{{ $portfolio->image   }}" name="old_image">

                                    </div>
                                </div>


                            </div>

                        </div>



                        <br><button type="submit" class="btn btn-primary"> <i class="fa fa-edit"></i> @lang('site.edit')</button>
                    </div>
                </div>
            </div>

        </form>
    </div>

    </div>
@endsection

@section('site_name',' | '. __('site.add_portfolio'))
@extends('dashboard.layouts._app')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">@lang('site.dashboard')</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.portfolios.index')  }}">@lang('site.portfolios')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('site.add_portfolio')</li>
            </ol>
        </nav>
        <form action="{{ route('admin.portfolios.store') }}" id="form_validation" method="post" enctype="multipart/form-data">
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
                                            <input type="text"  class="form-control" placeholder="@lang('site.'.$locale.'.title')" value="{{ old('$locale[title]')  }}" name="{{$locale}}[title]" id="{{$locale.'.name'}}">

                                        </div>
                                    </div>
                                @endforeach

                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="links">@lang('site.links') </label>
                                        <input type="text"  class="form-control" placeholder="@lang('site.links')" value="{{ old('links')  }}" name="links" id="links">
                                    </div>
                                </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="image">@lang('site.image') </label>
                                            <input type="file"  class="form-control" placeholder="@lang('site.image')" value="{{ old('image')  }}" name="image" id="image">

                                        </div>
                                    </div>


                            </div>

                            </div>



                            <br><button type="submit" class="btn btn-primary"> <i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>
                    </div>
                </div>

        </form>
    </div>

    </div>
@endsection

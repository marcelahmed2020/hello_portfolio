@section('site_name',' | '. $my_info->name)
@extends('dashboard.layouts._app')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">@lang('site.dashboard')</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.skills.index')  }}">@lang('site.skills')</a></li>
                <li class="breadcrumb-item active" aria-current="page">@lang('site.add_skill')</li>
            </ol>
        </nav>
        <form action="{{ route('admin.skills.store') }}" id="form_validation" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">@lang('site.title') </label>
                                        <input type="text"  class="form-control" placeholder="@lang('site.title')" value="{{ old('title')  }}" name="title" id="title">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="progress">@lang('site.progress') </label>
                                        <input type="text"  class="form-control" placeholder="@lang('site.progress')" value="{{ old('progress')  }}" name="progress" id="progress">
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

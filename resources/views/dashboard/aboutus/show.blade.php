@section('site_name','| '.$about->title )
@extends('dashboard.layouts._app')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">@lang('site.dashboard')</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.aboutus.index')  }}">@lang('site.aboutus')</a></li>
                <li class="breadcrumb-item active" aria-current="page"># {{ $about->title  }}</li>
            </ol>
        </nav>


                <div class="row">
                  <div class="col-lg-3">

                      <!-- Default Card Example -->
                      <div class="card shadow  mb-4">
                          <div class="card-header">
                              Info
                          </div>
                          <small class="card-body">

                        </small>
                      </div>
                  </div>

                  <div class="col-lg-7">

                      <!-- Dropdown Card Example -->
                      <div class="card shadow mb-4">
                          <!-- Card Header - Dropdown -->
                          <!-- Replys Card -->

                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                              @lang('site.all_information')
                          </div>
                          <div class="card-body">
                              @foreach (config('translatable.locales') as $code => $locale)
                                  <center>@lang('site.'.$locale.'_lang')</center>
                                  <h5>@lang('site.'.$locale.'.title') : {{! empty($about->translate($locale)->title)?$about->translate($locale)->title:''}}</h5>
                                  <h6>@lang('site.'.$locale.'.sub_title') : {{! empty($about->translate($locale)->sub_title)?$about->translate($locale)->sub_title:''}}</h6>
                                  <p>@lang('site.'.$locale.'.desc') : {{! empty($about->translate($locale)->desc)?$about->translate($locale)->desc:''}}</p>
                                  <strong>@lang('site.'.$locale.'.freelance') : {{! empty($about->translate($locale)->freelance)?$about->translate($locale)->freelance:''}}</strong>,
                                  <strong>@lang('site.'.$locale.'.degree') : {{! empty($about->translate($locale)->degree)?$about->translate($locale)->degree:''}}</strong>,
                                  <strong>@lang('site.'.$locale.'.address') : {{! empty($about->translate($locale)->address)?$about->translate($locale)->address:''}}</strong>
                                   <hr>
                              @endforeach
                               <h4>@lang('site.birthday') : {{ $about->birthday  }}</h4>
                               <h4>@lang('site.phone') : {{ $about->phone  }}</h4>
                               <h4>@lang('site.email')  : {{ $about->email  }}</h4>
                               <h4>@lang('site.is_it_in_profile') : {{ $about->one == 1 ? __('site.yes'): __('site.no')  }}</h4>




                          </div>
                      </div>


                  </div>

                    <div class="col-lg-2">
                        <!-- Default Card Example -->
                        <div class="card shadow  mb-4">
                            <div class="card-header">Action</div>
                            <div class="card-body">
                                <a href="{{ route('admin.aboutus.show',$about->id)  }}" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('admin.aboutus.edit',$about->id)  }}" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                                @if($about->one == 0)
                                    <a href="#" data-toggle="modal" data-target="#oneModal_{{$about->id}}" href="#" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-star"></i></a>
                                @endif

                                @if($about->enabled == 1)
                                    <a href="#" data-toggle="modal" data-target="#disabledModal_{{$about->id}}" href="#" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-exclamation-triangle"></i></a>
                                @else
                                    <a href="#" data-toggle="modal" data-target="#enabledModal_{{$about->id}}" href="#" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-check"></i></a>
                                @endif

                                <a href="#" data-toggle="modal" data-target="#logoutModal_{{$about->id}}" href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>




                            </div>
                        </div>
                      </div>
                    </div>
    </div>
    <!-- Delete Modal-->
    <div class="modal fade" id="logoutModal_{{$about->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('site.Ready_to_Delete')?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body">@lang('site.Select_Delete_below_if_you_are_ready_to_Delete'){{ $about->title}}. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('site.cancel')</button>
                    <a class="btn btn-primary" href="{{ route('admin.aboutus.del',$about->id)  }}">@lang('site.delete').</a>
                </div>
            </div>
        </div>
    </div>

    <!-- disabledModal_-->
    <div class="modal fade" id="disabledModal_{{$about->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('site.Ready_to_Disabled')?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body">@lang('site.Select_Disabled_below_if_you_are_ready_to_Disabled_This') {{ $about->title}}. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('admin.aboutus.disabled',$about->id)  }}">Disabled .</a>
                </div>
            </div>
        </div>
    </div>
    <!-- enabledModal_-->
    <div class="modal fade" id="enabledModal_{{$about->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('site.Ready_to_Enable') ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body">@lang('site.Select_Enable_below_if_you_are_ready_to_Enable_This')  {{ $about->title}}. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('site.cancel')</button>
                    <a class="btn btn-primary" href="{{ route('admin.aboutus.enabled',$about->id)  }}">@lang('site.enable') .</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="oneModal_{{$about->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('site.ready_to_make_it_primary') ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body">@lang('site.Select_one_below_if_you_are_ready_to_make_it_primary')  {{ $about->title}}. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('site.cancel')</button>
                    <a class="btn btn-primary" href="{{ route('admin.aboutus.one',$about->id)  }}">@lang('site.one') .</a>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('site_name','| '.$price->title )
@extends('dashboard.layouts._app')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">@lang('site.dashboard')</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.aboutus.index')  }}">@lang('site.aboutus')</a></li>
                <li class="breadcrumb-item active" aria-current="page"># {{ $price->title  }}</li>
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
                                  <h5>@lang('site.'.$locale.'.title') : {{! empty($price->translate($locale)->title)?$price->translate($locale)->title:''}}</h5>
                                  <h6>@lang('site.'.$locale.'.sub_title') : {{! empty($price->translate($locale)->sub_title)?$price->translate($locale)->sub_title:''}}</h6>
                                  @if($price->translate($locale)->desc1)
                                  <p>@lang('site.'.$locale.'.desc1') : {{! empty($price->translate($locale)->desc1)?$price->translate($locale)->desc1:''}}</p>
                                  @endif
                                  @if($price->translate($locale)->desc2)
                                  <p>@lang('site.'.$locale.'.desc2') : {{! empty($price->translate($locale)->desc2)?$price->translate($locale)->desc2:''}}</p>
                                  @endif
                                @if($price->translate($locale)->desc3)
                                      <p>@lang('site.'.$locale.'.desc3') : {{! empty($price->translate($locale)->desc3)?$price->translate($locale)->desc3:''}}</p>
                                  @endif
                                  <hr>

                              @endforeach
                            <strong>  @lang('site.price') : {{  $price->price  }}</strong>
                          </div>
                      </div>


                  </div>

                    <div class="col-lg-2">
                        <!-- Default Card Example -->
                        <div class="card shadow  mb-4">
                            <div class="card-header">Action</div>
                            <div class="card-body">
                                <a href="{{ route('admin.aboutus.show',$price->id)  }}" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('admin.aboutus.edit',$price->id)  }}" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>


                                @if($price->enabled == 1)
                                    <a href="#" data-toggle="modal" data-target="#disabledModal_{{$price->id}}" href="#" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-exclamation-triangle"></i></a>
                                @else
                                    <a href="#" data-toggle="modal" data-target="#enabledModal_{{$price->id}}" href="#" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-check"></i></a>
                                @endif

                                <a href="#" data-toggle="modal" data-target="#logoutModal_{{$price->id}}" href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>




                            </div>
                        </div>
                      </div>
                    </div>
    </div>
    <!-- Delete Modal-->
    <div class="modal fade" id="logoutModal_{{$price->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('site.Ready_to_Delete')?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body">@lang('site.Select_Delete_below_if_you_are_ready_to_Delete'){{ $price->title}}. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('site.cancel')</button>
                    <a class="btn btn-primary" href="{{ route('admin.aboutus.del',$price->id)  }}">@lang('site.delete').</a>
                </div>
            </div>
        </div>
    </div>

    <!-- disabledModal_-->
    <div class="modal fade" id="disabledModal_{{$price->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('site.Ready_to_Disabled')?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body">@lang('site.Select_Disabled_below_if_you_are_ready_to_Disabled_This') {{ $price->title}}. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('admin.aboutus.disabled',$price->id)  }}">Disabled .</a>
                </div>
            </div>
        </div>
    </div>
    <!-- enabledModal_-->
    <div class="modal fade" id="enabledModal_{{$price->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('site.Ready_to_Enable') ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body">@lang('site.Select_Enable_below_if_you_are_ready_to_Enable_This')  {{ $price->title}}. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('site.cancel')</button>
                    <a class="btn btn-primary" href="{{ route('admin.aboutus.enabled',$price->id)  }}">@lang('site.enable') .</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="oneModal_{{$price->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">@lang('site.ready_to_make_it_primary') ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body">@lang('site.Select_one_below_if_you_are_ready_to_make_it_primary')  {{ $price->title}}. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('site.cancel')</button>
                    <a class="btn btn-primary" href="{{ route('admin.aboutus.one',$price->id)  }}">@lang('site.one') .</a>
                </div>
            </div>
        </div>
    </div>


@endsection

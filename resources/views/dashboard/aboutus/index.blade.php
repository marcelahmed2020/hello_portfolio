@section('site_name',' | '.__('site.aboutus'))
@extends('dashboard.layouts._app')
@section('content')

    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">@lang('site.dashboard')</a></li>
                <li  class="breadcrumb-item active" aria-current="page"><a href="#">@lang('site.aboutus')</a></li>
            </ol>
        </nav>
        <!-- Page Heading -->
        <h1 class="h3 m-0 font-weight-bold text-primary">@lang('site.DataTablesAboutusList')   </h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <a href="{{ route('admin.aboutus.create')  }}" class="btn btn-primary btn-icon-split" style="float: right">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text"> @lang('site.add_aboutus')</span>
                </a>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                      <tr>
                          <th>@lang('site.title')</th>
                          <th>@lang('site.sub_title')</th>
                          <th>@lang('site.primary')</th>

                          <th>@lang('site.created_by')</th>
                          <!--  -->
                          <th>@lang('site.visiblity')</th>
                        <th>@lang('site.action')</th>
                      </tr>
                      </thead>
                      <tfoot>
                      <tr>
                          <th>@lang('site.title')</th>
                          <th>@lang('site.sub_title')</th>
                          <th>@lang('site.primary')</th>
                          <th>@lang('site.created_by')</th>
                          <!--  -->
                          <th>@lang('site.visiblity')</th>
                          <th>@lang('site.action')</th>

                      </tr>
                      </tfoot>
                      <tbody>
                      @foreach($abouts as $about)
                      <tr @if($about->one == 1)  style="background-color: #dddd;" @endif>
                          <td>{{  $about->title}} </td>
                          <td>{{  $about->sub_title}} </td>
                          <td><small>
                                  @if($about->one == 1)
                                   @lang('site.primary')
                                  @else
                                   @lang('site.no_primary')
                                  @endif
                                  @lang('site.in_website')
                              </small> </td>

                          <td> <small>
                                  @if($about->users->count() > 0)
                                  {{ $about->users->first()['name']  }}
                                  @endif
                              </small> </td>
                          <td>{{  $about->enabled == 1?'Enabled':'Disabled' }}</td>

                          <td>
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
                           </td>

                      </tr>
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

                      @endforeach
                      </tbody>
                  </table>

                </div>
            </div>
        </div>

    </div>



@endsection

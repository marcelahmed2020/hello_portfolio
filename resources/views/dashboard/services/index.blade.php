@section('site_name',' | '.__('site.services'))
@extends('dashboard.layouts._app')
@section('content')

    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">@lang('site.dashboard')</a></li>
                <li  class="breadcrumb-item active" aria-current="page"><a href="#">@lang('site.services')</a></li>
            </ol>
        </nav>
        <!-- Page Heading -->
        <h1 class="h3 m-0 font-weight-bold text-primary">@lang('site.DataTablesServicesList')   </h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <a href="{{ route('admin.services.create')  }}" class="btn btn-primary btn-icon-split" style="float: right">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text"> @lang('site.add_service')</span>
                </a>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                      <tr>
                          <th>@lang('site.id')</th>
                          <th>@lang('site.title')</th>
                          <th>@lang('site.desc')</th>
                          <th>@lang('site.created_by')</th>
                          <th>@lang('site.visiblity')</th>
                        <th>@lang('site.action')</th>
                      </tr>
                      </thead>
                      <tfoot>
                      <tr>
                          <th>@lang('site.id')</th>
                          <th>@lang('site.title')</th>
                          <th>@lang('site.desc')</th>
                          <th>@lang('site.created_by')</th>
                          <th>@lang('site.visiblity')</th>
                          <th>@lang('site.action')</th>

                      </tr>
                      </tfoot>
                      <tbody>
                      @foreach($services as $key => $service)
                      <tr>
                          <td>{{  $key + 1}} </td>
                          <td>{{  $service->title}} </td>
                          <td>{{  $service->desc}} </td>

                          <td> <small>
                                  @if($service->users->count() > 0)
                                  {{ $service->users->first()['name']  }}
                                  @endif
                              </small> </td>
                          <td>{{  $service->enabled == 1?'Enabled':'Disabled' }}</td>

                          <td>
{{--                              <a href="{{ route('admin.services.show',$service->id)  }}" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-eye"></i></a>--}}
                              <a href="{{ route('admin.services.edit',$service->id)  }}" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>

                          @if($service->enabled == 1)
                                   <a href="#" data-toggle="modal" data-target="#disabledModal_{{$service->id}}" href="#" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-exclamation-triangle"></i></a>
                               @else
                                   <a href="#" data-toggle="modal" data-target="#enabledModal_{{$service->id}}" href="#" class="btn btn-primary btn-circle btn-sm"><i class="fas fa-check"></i></a>
                               @endif

                               <a href="#" data-toggle="modal" data-target="#logoutModal_{{$service->id}}" href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                           </td>

                      </tr>
                       <!-- Delete Modal-->
                      <div class="modal fade" id="logoutModal_{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">@lang('site.Ready_to_Delete')?</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                      </button>
                                  </div>
                                  <small class="modal-body">@lang('site.Select_Delete_below_if_you_are_ready_to_Delete'){{ $service->title}}. ?</small>
                                  <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('site.cancel')</button>
                                      <a class="btn btn-primary" href="{{ route('admin.services.del',$service->id)  }}">@lang('site.delete').</a>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <!-- disabledModal_-->
                      <div class="modal fade" id="disabledModal_{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">@lang('site.Ready_to_Disabled')?</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                      </button>
                                  </div>
                                  <small class="modal-body">@lang('site.Select_Disabled_below_if_you_are_ready_to_Disabled_This') {{ $service->title}}. ?</small>
                                  <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                      <a class="btn btn-primary" href="{{ route('admin.services.disabled',$service->id)  }}">Disabled .</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- enabledModal_-->
                      <div class="modal fade" id="enabledModal_{{$service->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">@lang('site.Ready_to_Enable') ?</h5>
                                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                      </button>
                                  </div>
                                  <small class="modal-body">@lang('site.Select_Enable_below_if_you_are_ready_to_Enable_This')  {{ $service->title}}. ?</small>
                                  <div class="modal-footer">
                                      <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('site.cancel')</button>
                                      <a class="btn btn-primary" href="{{ route('admin.services.enabled',$service->id)  }}">@lang('site.enable') .</a>
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

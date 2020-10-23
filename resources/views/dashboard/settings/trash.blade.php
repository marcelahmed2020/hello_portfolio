@section('site_name',' | Trash')
@extends('dashboard.layouts._app')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Trash</li>
            </ol>
        </nav>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>From</th>
                        <th>Info</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>From</th>
                        <th>Info</th>
                        <th>Action</th>

                    </tr>
                    </tfoot>
                    <tbody>
                    {{-- Articles    --}}
@if($articels->count() > 0 )
   @foreach($articels as $articel)
                        <tr>
                            <td> <a href="{{route('articles.index')}}">Articels</a> </td>
                            <td>{{  substr($articel->title,0,100) }}</td>
                            <td>
                                @permission('articels-read')
                                <a href="{{ route('articles.show',$articel->id)  }}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                                @endpermission
                                @permission('articels-update')
                                <a href="{{ route('articles.edit',$articel->id)  }}" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                                @endpermission
                                @permission('trash-delete')

                                <a href="#" data-toggle="modal" data-target="#reModal_{{$articel->id}}" href="#" class="btn btn-info btn-circle btn-sm"><i class="fas fa-backward"></i></a>
                                <a href="#" data-toggle="modal" data-target="#logoutModal_{{$articel->id}}" href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                                @endpermission
                            </td>

                        </tr>
                        @permission('trash-delete')

                        <!-- Delete Modal-->
                        <div class="modal fade" id="logoutModal_{{$articel->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <small class="modal-body">Select "Delete" below if you are ready to Delete {{ $articel->title}}. ?</small>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" href="{{ route('articles.destroy.art',$articel->id)  }}">Delete.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        reModal_--}}
                        <div class="modal fade" id="reModal_{{$articel->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ready to Restore?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <small class="modal-body">Select "Delete" below if you are ready to Restore {{ $articel->title}}. ?</small>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" href="{{ route('articles.restore',$articel->id)  }}">Restore.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endpermission


                    @endforeach
@endif
                    {{-- Replies  --}}
@if($replies->count() > 0 )
@foreach($replies as $reply)
    <tr>
        <td> <a href="{{route('replies.index')}}">Replies</a> </td>
        <td>{{  substr($reply->desc,0,60) }}..</td>

        <td>
            @permission('replies-read')
            <a href="{{ route('replies.show',$reply->id)  }}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
            @endpermission
            @permission('replies-update')
            <a href="{{ route('replies.edit',$reply->id)  }}" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
            @endpermission

            @permission('trash-delete')
            <a href="#" data-toggle="modal" data-target="#rpliesModal_{{$reply->id}}" href="#" class="btn btn-info btn-circle btn-sm"><i class="fas fa-backward"></i></a>

            <a href="#" data-toggle="modal" data-target="#logoutModal_{{$reply->id}}" href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>

{{--            rpliesModal_--}}
            @endpermission
        </td>

    </tr>
    @permission('trash-delete')

    <!-- Delete Modal-->
    <div class="modal fade" id="logoutModal_{{$reply->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body">Select "Delete" below if you are ready to Delete {{  substr($reply->desc,0,60) }}. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('replies.destroy.art',$reply->id)  }}">Delete.</a>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="rpliesModal_{{$reply->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Restore?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body">Select "Delete" below if you are ready to Restore {{  substr($reply->desc,0,60) }}. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('replies.restore',$reply->id)  }}">Restore.</a>
                </div>
            </div>
        </div>
    </div> @endpermission

@endforeach
@endif
                    {{-- Channels  --}}
@if($channels->count() > 0 )
    @foreach($channels as $channel)
        <tr>
            <td>                <a href="{{ route('channels.index')  }}">Channels</a></td>
            <td>{{  $channel->title}} </td>

            <td>
                {{--                               @permission('channels-read')--}}
                {{--                               <a href="{{ route('channels.show',$channel->id)  }}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>--}}
                {{--                               @endpermission--}}
                @permission('channels-update')
                <a href="{{ route('channels.edit',$channel->id)  }}" class="btn btn-success btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                @endpermission
                @permission('trash-delete')
                <a href="#" data-toggle="modal" data-target="#channelsModal_{{$channel->id}}" href="#" class="btn btn-info btn-circle btn-sm"><i class="fas fa-backward"></i></a>
                <a href="#" data-toggle="modal" data-target="#logoutChannelModal_{{$channel->id}}" href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                @endpermission
            </td>

        </tr>
        @permission('trash-delete')
        <!-- Delete Modal-->
        <div class="modal fade" id="logoutChannelModal_{{$channel->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <small class="modal-body">Select "Delete" below if you are ready to Delete {{ $channel->title}}. ?</small>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('channels.destroy.art',$channel->id)  }}">Delete.</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Restore-->
        <div class="modal fade" id="channelsModal_{{$channel->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Restore?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <small class="modal-body">Select "Disabled" below if you are ready to Disabled This Restore {{ $channel->title}}. ?</small>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('channels.restore',$channel->id)  }}">Restore .</a>
                    </div>
                </div>
            </div>
        </div>
        @endpermission

    @endforeach
@endif
                     {{-- Contact  --}}
@if($contacts->count() > 0)
    @foreach($contacts as $contact)
        <tr>
              <td> <a href="{{ route('contact.index')  }}">Contacts</a> </td>
              <td>{{$contact->subject}}</td>
            <td>
                @permission('replies-read')
                <a href="{{ route('contact.show',$contact->id)  }}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                @endpermission

                @permission('trash-delete')
                <a href="#" data-toggle="modal" data-target="#contactssModal_{{$contact->id}}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-backward"></i></a>
                <a href="#" data-toggle="modal" data-target="#contaoutModal_{{$contact->id}}"  class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                @endpermission
            </td>

        </tr>
        @permission('trash-delete')

        <!-- Delete Modal-->
        <div class="modal fade" id="contaoutModal_{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <small class="modal-body">Select "Delete" below if you are ready to Delete {{ $contact->title}}. ?</small>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('contact.destroy.art',$contact->id)  }}">Delete.</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Restore-->
        <div class="modal fade" id="contactssModal_{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Restore?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <small class="modal-body">Select "Disabled" below if you are ready to Disabled This Restore {{ $contact->subject}}. ?</small>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('contact.restore',$contact->id)  }}">Restore .</a>
                    </div>
                </div>
            </div>
        </div>

        @endpermission


    @endforeach
@endif

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

@section('site_name',' | Contact Message '. $contact->subject.'..')
@extends('dashboard.layouts._app')
@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('contact.index')  }}">Contacts</a></li>

                <li class="breadcrumb-item active" aria-current="page"> {{'Reply to #'.$contact->subject.'..'}}</li>

            </ol>
        </nav>


        <div class="row">
            <div class="col-lg-3">

                <!-- Default Card Example -->
                <div class="card shadow text-primary  mb-4">
                    <div class="card-header">
                        Info
                    </div>
                    <small class="card-body">
                        @if (! empty($contact->user()))
                            <?php if ($contact->user->admin == 1): ?>
                            <a href="{{ route('admins.show',$contact->user->id)  }}">First read By admin : {{'@'.$contact->user->username}}</a>
                            <?php else: ?>
                            <a href="{{ route('users.show',$contact->user->id)  }}">First read By formar admin : {{'@'.$contact->user->username}}</a>
                            <?php endif; ?>
                            <br>
                        @endif
                        <p> Read at : {{ $contact->read }} </p>
                     @if($contact->response_by_id != 0)
                                @if (! empty($contact->userResponse()))
                                <?php if ($contact->userResponse->admin == 1): ?>
                                <a href="{{ route('admins.show',$contact->userResponse->id)  }}">First response By admin : {{'@'.$contact->userResponse->username}}</a>
                                <?php else: ?>
                                <a href="{{ route('users.show',$contact->userResponse->id)  }}">First response By formar admin : {{'@'.$contact->userResponse->username}}</a>
                                <?php endif; ?>
                                @endif
                            @else
                                No Resonse Yet
                            @endif


                    </small>
                </div>
            </div>

            <div class="col-lg-7">

                <!-- Dropdown Card Example -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <!-- Replys Card -->

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h5 class="m-2 font-weight-bold text-primary">Full Name : {{ $contact->full_name  }} </h5>

                    </div>
                    <div class="card-body">

                        <h5 class="m-2 font-weight-bold text-primary">E-mail : {{ $contact->email  }} </h5>
                        <h6 class="m-2 font-weight-bold text-primary">Subject : {{ $contact->subject  }} </h6>
                        <p>Message: {!! $contact->message !!}</p>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header"> Lets Response..</div>
                   <div class="card-body">
                      <form  method="post" action="{{ route('send.message')}}">
                          @csrf
                       <div class="form-group">
                            <input type="hidden" class="form-control"  name="email" id="email" placeholder="E-mail.."   value="{{$contact->email}}" />
                           <input type="hidden"    name="contact_id"     value="{{$contact->id}}" />
                       </div>
                          <div class="form-group">
                            <input type="hidden" class="form-control"  name="subject" id="subject"  placeholder="Type subject.."  value="{{$contact->subject}}" />
                       </div>
                       <div class="form-group">
                           <label for="message">Message</label>
                           <textarea class="ckeditor form-control" name="message" id="message" placeholder="Type article description..">{{old('message')}}</textarea>
                       </div>
                          <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-mail-bulk"></i> Send</button>
                          </div>

                      </form>
                   </div>


                </div>



                </div>

            <div class="col-lg-2">
                <!-- Default Card Example -->
                <div class="card shadow  mb-4">
                    <div class="card-header">Action</div>
                    <div class="card-body">

                        <div class="my-2"></div>

                        @permission('replies-delete')
                        <a data-toggle="modal" data-target="#logoutModal_{{$contact->id}}" href="#" class="btn btn-danger btn-icon-split">
                          <span class="icon text-gray-600">
                            <i class="fas fa-trash"></i>
                          </span>
                            <span class="text">Delete</span>
                        </a>
                        @endpermission

                    </div>
                </div>
            </div>
        </div>
    </div>

    @permission('replies-delete')

    <!-- Delete Modal-->
    <div class="modal fade" id="logoutModal_{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Delete?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <small class="modal-body">Select "Delete" below if you are ready to Delete {{substr($contact->subject,0,80)}}. ?</small>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('contact.destroy.status',$contact->id)  }}">Delete.</a>
                </div>
            </div>
        </div>
    </div>
    @endpermission



@endsection

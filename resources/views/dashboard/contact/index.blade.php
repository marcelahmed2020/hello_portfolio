@section('site_name',' | Contacts')
@extends('dashboard.layouts._app')
@section('content')

    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">Dashboard</a></li>
                <li  class="breadcrumb-item active" aria-current="page"><a href="#">Contacts</a></li>
            </ol>
        </nav>
        <!-- Page Heading -->
        <h1 class="h3 m-0 font-weight-bold text-primary">DataTables Contacts List</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Full name</th>
                            <th>Read</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Full name</th>
                            <th>Subject</th>
                            <th>Action</th>

                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{  $contact->full_name }}</td>
                                <td>
                                    @php
                                       if ($contact->read != 0){
                                            echo $contact->read . '<br>';
                                            if (! empty($contact->user)){
                                               echo '<a href="'. route('activities',$contact->user->id) .'" <br /> read by @'.$contact->user->username .'</a>';

                                            }
                                        }else{
                                            echo 'unread';
                                        }
                                    @endphp
                                </td>
                                <td>{{$contact->subject}}</td>
                                <td>
                                    @permission('replies-read')
                                    <a href="{{ route('contact.show',$contact->id)  }}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-eye"></i></a>
                                    @endpermission

                                    @permission('replies-delete')
                                    <a href="#" data-toggle="modal" data-target="#logoutModal_{{$contact->id}}" href="#" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                                    @endpermission
                                </td>

                            </tr>
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
                                        <small class="modal-body">Select "Delete" below if you are ready to Delete {{ $contact->title}}. ?</small>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <a class="btn btn-primary" href="{{ route('contact.destroy.status',$contact->id)  }}">Delete.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endpermission


                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>



@endsection

@section('site_name','Trash')
@section('content')
@extends('admin.layouts_RKh._app')
<section class="content">
<div class="container-fluid">
            <div class="block-header">
            <div class="row">
              <div class="col-md-6">
               <h2>
                Trash
                <small>  {{ auth()->user()->name  }} </small>
              </h2>
              </div>
              <div class="col-md-6">
              <ol class="breadcrumb breadcrumb-bg-black">
                                              <li><a href="{{ route('dashboard')  }}">
                                              <i class="material-icons">home</i> Dashboard</a></li>
                                              <li class="active"><i class="material-icons">view_list</i> Trash</li>
                                          </ol>


              </div>
            </div>

            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="card">
                                      <div class="header">
                                          <h2>
                                                Trash

                                          </h2>

                                      </div>
                                      <div class="body table-responsive">
                                            <div class="body">
                                                                   <div>
                                                                      <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                                                      <div class="row">
                                                                      <div class="col-sm-12">
                                                                      <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                                          <thead>
                                                                              <tr role="row">
                                                                              <th  class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 30px;">
                                                                              #</th>
                                                                              <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">
                                                                          Model</th>
                                                                          <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">
                                                                      Info</th>
                                                                      <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">
                                                                  Info</th>
                                                                             <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;">
                                                                              Action</th></tr>
                                                                          </thead>
                                                                          <tbody>
@if (! empty($users))
@foreach ($users as $key => $value)
<tr>
<td>#</td>
<td> <a href="{{ route('users.edit',$value->id) }}"> Admin </a></td>
<td>Name  : {{ $value->name }}</td>
<td>Email : {{ $value->email }}</td>
<td>
@permission('update_trash')
<a class="btn btn-info btn-sm" href="{{ route('users.edit',$value->id) }}"><i class="material-icons">mode_edit</i> </a>
@endpermission
@permission('update_trash')
<form   style="margin:0px 2px  ;display:inline"  action="{{ url('/admin/user/enabled/'.$value->id)}}" id="date-form-{{ $value->id}}" method="get">

{{ csrf_field() }}
</form>
<a class="btn btn-info btn-sm"  onclick="
if(confirm('Are You Sure, You Want To Restore This Admin!?')){
event.preventDefault();document.getElementById('date-form-{{ $value->id}}').submit()
}else{
event.preventDefault();
}"  href="{{ url('/admin/user/enabled/'.$value->id) }}"><i class="material-icons">cached</i>  </a>
@endpermission


</td></tr>

@endforeach
@endif
@if (! empty($teams))
@foreach ($teams as $key => $value)
<tr>
<td>#</td>
<td> <a href="{{ route('teams.edit',$value->id) }}"> Teams  </a></td>
<td>Name  : {{ $value->name }}</td>
<td>Email : {{ $value->email }}</td>
<td>
@permission('update_trash')
<a class="btn btn-info btn-sm" href="{{ route('teams.edit',$value->id) }}"><i class="material-icons">mode_edit</i> </a>
@endpermission
@permission('update_trash')
<form   style="margin:0px 2px  ;display:inline"  action="{{ url('/admin/teams/enabled/'.$value->id)}}" id="date-form-teams-{{ $value->id}}" method="post">

{{ csrf_field() }}
</form>
<a class="btn btn-info btn-sm"  onclick="
if(confirm('Are You Sure, You Want To Restore This Team!?')){
event.preventDefault();document.getElementById('date-form-teams-{{ $value->id}}').submit()
}else{
event.preventDefault();
}"  href="{{ url('/admin/teams/enabled/'.$value->id) }}"><i class="material-icons">cached</i>  </a>
@endpermission


</td></tr>

@endforeach
@endif
@if (! empty($about_tr))
@foreach ($about_tr as $key => $value)
<tr>
<td>#</td>
<td> <a href="{{ route('section.edit',$value->id) }}"> About Us Sections  </a></td>
<td>Title  : {{ $value->title }}</td>
<td>Description : {{ $value->description }}</td>
<td>
@permission('update_trash')
<a class="btn btn-info btn-sm" href="{{ route('section.edit',$value->id) }}"><i class="material-icons">mode_edit</i> </a>
@endpermission
@permission('update_trash')
<form   style="margin:0px 2px  ;display:inline"  action="{{ url('/admin/sections/enabled/'.$value->id)}}" id="date-form-sections-{{ $value->id}}" method="post">

{{ csrf_field() }}
</form>
<a class="btn btn-info btn-sm"  onclick="
if(confirm('Are You Sure, You Want To Restore This Sections!?')){
event.preventDefault();document.getElementById('date-form-sections-{{ $value->id}}').submit()
}else{
event.preventDefault();
}"  href="{{ url('/admin/sections/enabled/'.$value->id) }}"><i class="material-icons">cached</i>  </a>
@endpermission


</td></tr>

@endforeach
@endif
@if (! empty($chooseus_t))
@foreach ($chooseus_t as $key => $value)
<tr>
<td>#</td>
<td> <a href="{{ route('chooseus.edit',$value->id) }}"> Choose Us    </a></td>
<td>Title  : {{ $value->title }}</td>
<td>Description : {{ $value->description }}</td>
<td>
@permission('update_trash')
<a class="btn btn-info btn-sm" href="{{ route('chooseus.edit',$value->id) }}"><i class="material-icons">mode_edit</i> </a>
@endpermission
@permission('update_trash')
<form   style="margin:0px 2px  ;display:inline"  action="{{ url('/admin/chooseus/enabled/'.$value->id)}}" id="date-form-chooseus-{{ $value->id}}" method="post">

{{ csrf_field() }}
</form>
<a class="btn btn-info btn-sm"  onclick="
if(confirm('Are You Sure, You Want To Restore This Choose Us Sections!?')){
event.preventDefault();document.getElementById('date-form-chooseus-{{ $value->id}}').submit()
}else{
event.preventDefault();
}"  href="{{ url('/admin/chooseus/enabled/'.$value->id) }}"><i class="material-icons">cached</i>  </a>
@endpermission


</td></tr>

@endforeach
@endif

@if (! empty($services_tr))
@foreach ($services_tr as $key => $value)
<tr>
<td>#</td>
<td> <a href="{{ route('services.edit',$value->id) }}"> Services    </a></td>
<td>Title  : {{ $value->title }}</td>
<td>Description : {{ $value->description }}</td>
<td><div class="js-modal-buttons button-demo">
@permission('update_trash')
<a class="btn btn-info btn-sm" href="{{ route('services.edit',$value->id) }}"><i class="material-icons">mode_edit</i> </a>
@endpermission
@permission('update_trash')
<form   style="margin:0px 2px  ;display:inline"  action="{{ url('/admin/services/enabled/'.$value->id)}}" id="date-form-services-{{ $value->id}}" method="post">

{{ csrf_field() }}
</form>
<a class="btn btn-info btn-sm"  onclick="
if(confirm('Are You Sure, You Want To Restore This Services!?')){
event.preventDefault();document.getElementById('date-form-services-{{ $value->id}}').submit()
}else{
event.preventDefault();
}"  href="{{ url('/admin/services/enabled/'.$value->id) }}"><i class="material-icons">cached</i>  </a>
@endpermission
    <br>

        <button style="display: inline" type="button" class="btn bg-black  waves-effect m-r-20"
                data-toggle="modal" data-target="#largeModal-{{$value->id}}"> <i class="material-icons">view_array</i> </button>
    </div>


</td></tr>
<div class="modal fade" id="largeModal-{{$value->id}}" tabindex="-1" role="dialog" style="display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-col-red">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">{{ $value->title   }}</h4>
            </div>
            <div class="modal-body">
                <h5 class="modal-title">title : {{ $value->title   }}</h5>
                <p class="modal-title">
                    Description: {{ $value->description   }} <br />
                    Link: {{ $value->link ?:'You Didnot Put Any Links To This Service '   }} <br />
                    icon : {{$value->icon}}</p>
                <h4>Progress:  {{$value->progress}} %    </h4>
                <hr>
                @if($value->services_img != 0)

                    <img src="{{ url('RKhB/services_images/'.$value->image) }}"  width="100%" height="320px" />
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

@endforeach
@endif
@if (! empty($customers_tr))
    @foreach ($customers_tr as $key => $value)
        <tr>
            <td>#</td>
            <td> <a href="{{ route('customers.edit',$value->id) }}"> Customers    </a></td>
            <td>Name  : {{ $value->name }}</td>
            <td>Job Description : {{ $value->job_description }}</td>
            <td>
                <div class="js-modal-buttons button-demo">
                @permission('update_trash')
                <a class="btn btn-info btn-sm" href="{{ route('customers.edit',$value->id) }}"><i class="material-icons">mode_edit</i> </a>
                @endpermission
                @permission('update_trash')
                <form   style="margin:0px 2px  ;display:inline"  action="{{ url('/admin/customers/enabled/'.$value->id)}}" id="date-form-customers-{{ $value->id}}" method="post">

                    {{ csrf_field() }}
                </form>
                <a class="btn btn-info btn-sm"  onclick="
                    if(confirm('Are You Sure, You Want To Restore This Customer!?')){
                    event.preventDefault();document.getElementById('date-form-customers-{{ $value->id}}').submit()
                    }else{
                    event.preventDefault();
                    }"  href="{{ url('/admin/customers/enabled/'.$value->id) }}"><i class="material-icons">cached</i>  </a>
                @endpermission
                    <button style="display: inline" type="button" class="btn bg-black  waves-effect m-r-20"
                            data-toggle="modal" data-target="#largeModal-{{$value->id}}"> <i class="material-icons">view_array</i> </button>
                </div>

            </td></tr>
        <div class="modal fade" id="largeModal-{{$value->id}}" tabindex="-1" role="dialog" style="display: none; padding-right: 17px;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-col-red">
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalLabel">{{ $value->name   }}</h4>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title">Job Description:{{  $value->job_description  }}</h5>
                        <p class="modal-title">
                        <h5 class="modal-title">What He/She Saying : {{ $value->what_saying   }}</h5>
                        <h6 class="modal-title">description : {{ $value->description   }}</h6>
                        </p>
                        @if($value->image != 0)
                            <img src="{{ url('RKhB/customers_images/'.$value->image) }}"  width="100%" height="320px" />
                        @endif

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
@if (! empty($clients_tr))
    @foreach ($clients_tr as $key => $value)
        <tr>
            <td>#</td>
            <td> <a href="{{ route('clients.edit',$value->id) }}"> Clients </a></td>
            <td>Name  : {{ $value->name }}</td>
            <td>

                <img src="{{ url('RKhB/clients_logos/'.$value->image)  }}" width="100px" height="100px">
            </td>
            <td>
                @permission('update_trash')
                <a class="btn btn-info btn-sm" href="{{ route('clients.edit',$value->id) }}"><i class="material-icons">mode_edit</i> </a>
                @endpermission
                @permission('update_trash')
                <form   style="margin:0px 2px  ;display:inline"  action="{{ url('/admin/clients/enabled/'.$value->id)}}" id="date-form-clients-{{ $value->id}}" method="post">

                    {{ csrf_field() }}
                </form>
                <a class="btn btn-info btn-sm"  onclick="
                    if(confirm('Are You Sure, You Want To Restore This Client!?')){
                    event.preventDefault();document.getElementById('date-form-clients-{{ $value->id}}').submit()
                    }else{
                    event.preventDefault();
                    }"  href="{{ url('/admin/clients/enabled/'.$value->id) }}"><i class="material-icons">cached</i>  </a>
                @endpermission


            </td></tr>

    @endforeach
@endif
@if (! empty($portfolios_tr))
    @foreach ($portfolios_tr as $key => $value)
        <tr>
            <td>#</td>
            <td> <a href="{{ route('portfolios.edit',$value->id) }}"> Portfolio </a></td>
            <td>Client Name  : {{ $value->client_name }}</td>
            <td>Title  : {{ $value->title }}</td>
            <td>
                <div class="js-modal-buttons button-demo">
                @permission('update_trash')
                <a class="btn btn-info btn-sm" href="{{ route('portfolios.edit',$value->id) }}"><i class="material-icons">mode_edit</i> </a>
                @endpermission
                @permission('update_trash')
                <form   style="margin:0px 2px  ;display:inline"  action="{{ url('/admin/portfolios/enabled/'.$value->id)}}" id="date-form-portfolios-{{ $value->id}}" method="post">

                    {{ csrf_field() }}
                </form>
                <a class="btn btn-info btn-sm"  onclick="
                    if(confirm('Are You Sure, You Want To Restore This Portfolio!?')){
                    event.preventDefault();document.getElementById('date-form-portfolios-{{ $value->id}}').submit()
                    }else{
                    event.preventDefault();
                    }"  href="{{ url('/admin/portfolios/enabled/'.$value->id) }}"><i class="material-icons">cached</i>  </a>
                @endpermission

                    <button style="display: inline" type="button" class="btn bg-black  waves-effect m-r-20"
                            data-toggle="modal" data-target="#largeModal-{{$value->id}}"> <i class="material-icons">view_array</i> </button>
                </div>

            </td></tr>
        <div class="modal fade" id="largeModal-{{$value->id}}" tabindex="-1" role="dialog" style="display: none; padding-right: 17px;">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content modal-col-red">
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalLabel">{{ $value->title   }}</h4>
                    </div>
                    <div class="modal-body">
                        <p class="modal-title">
                        <h5 class="modal-title">Sub title : {{ $value->sub_title   }}</h5>
                        <h5 class="modal-title">Client Name : {{ $value->client_name   }}</h5>
                        <h5 class="modal-title">completed : {{ $value->completed   }}</h5>
                        <h5 class="modal-title">project_budget : {{ $value->project_budget   }}</h5>
                        <h6 class="modal-title">Service / Category : {{ $value->category->title   }}</h6>
                        </p>
                        <hr>
                        @if($value->image != 0)

                            <img src="{{ url('RKhB/portfolios_images/'.$value->image) }}"  width="100%" height="320px" />
                        @endif
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif

        </tbody>
        </table>


        </div>

        </div>
        </div>
        </div>


        </div>
        </div>
            </div>
            <!-- #END# Basic Examples -->
      </div>

            </div></div>
</section>

@endsection

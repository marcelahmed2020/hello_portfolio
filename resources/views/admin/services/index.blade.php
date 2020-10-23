@section('site_name','SERVICES')
@section('content')
@extends('admin.layouts_RKh._app')
<section class="content">
<div class="container-fluid">

            <div class="block-header">
                    <div class="row">
                      <div class="col-md-6">
                       <h2>
                           SERVICES Table
                        <small>  {{ auth()->user()->name  }} </small>
                      </h2>
                      </div>
                      <div class="col-md-6">
                        <ol class="breadcrumb breadcrumb-bg-black">
                                                      <li><a href="{{ route('dashboard')  }}">
                                                      <i class="material-icons">home</i> Dashboard</a></li>
                                                      <li class="active"><i class="material-icons">view_list</i> SERVICES</li>
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

                                              <a href="{{ route('services.create')  }}"  style="
    padding: 5px;
    background-color: black;
    color: #fff;
" class="pull-right" class="btn btn-primary"> <i class="material-icons">plus_one</i> </a>
                                          </h2>
                                      </div>
                                      <div class="body table-responsive">
                                            <div class="body">
                                                                  {{--class="table-responsive"--}}
                                                                  <div>
                                                                      <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                                                      <div class="row">
                                                                      <div class="col-sm-12">
                                                                      <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                                          <thead>
                                                                              <tr role="row">
                                                                              <th  class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 30px;">
                                                                              #</th>
                                                                                 <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142px;">
                                                                             Title</th>    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 140px;">
                                                                                      Description</th>
                                                                             <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;">
                                                                              Action</th></tr>
                                                                          </thead>
                                                                          <tbody>
                                                                            @foreach($services as $key => $ad)
                                                                           <tr role="row" class="even">
                                                                                  <td class="sorting_1">{{ $key + 1  }}</td>
                                                                                  <td>{{  $ad->title  }}</td>
                                                                                  <td>
                                                                                  {{  $ad->desc  }}
                                                                                   </td>
                                                                                   <td>
                                                                                   <div class="js-modal-buttons button-demo">
                                                                                     <a  class="btn btn-info btn-sm"  href="{{ route('services.edit',$ad->id)  }}" title="Edit"> <i class="material-icons">mode_edit</i>  </a>
                                                                                      <form   style="margin:0px 2px  ;display:inline"  action="{{  route('services.destroy',$ad->id)}}" id="date-form-{{ $ad->id}}" method="post">
                                                                                    {{ csrf_field() }}
                                                                                          {{  method_field('DELETE') }}
                                                                                    </form>
                                                                                    <a class="btn btn-danger btn-sm"  onclick="
                                                                                    if(confirm('Are You Sure, You Want To Delete This SERVICE..!?')){
                                                                                    event.preventDefault();document.getElementById('date-form-{{ $ad->id}}').submit()
                                                                                    }else{
                                                                                    event.preventDefault();
                                                                                  }"  href="{{  route('services.destroy',$ad->id) }}"><i class="material-icons">delete</i>   </a>
                                                                                   </div></td>
                                                                              </tr>
                                                                              @endforeach
                                                                              </tbody>
                                                                      </table>

                                                                      </div>
                                                                      </div>

                                                                      </div>
                                                                  </div>
                                                              </div>


                                       </div>
                                  </div>
            </div>
            <!-- #END# Basic Examples -->
            </div></div>
</section>

@endsection

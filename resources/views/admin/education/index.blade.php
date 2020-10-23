@section('site_name','Educations')
@section('content')
@extends('admin.layouts_RKh._app')
<section class="content">
<div class="container-fluid">
            <div class="block-header">
                    <div class="row">
                      <div class="col-md-6">
                       <h2>
                           Educations Table
                        <small>  {{ auth()->user()->name  }} </small>
                      </h2>
                      </div>
                      <div class="col-md-6">
                        <ol class="breadcrumb breadcrumb-bg-black">
                                                      <li><a href="{{ route('dashboard')  }}">
                                                      <i class="material-icons">home</i> Dashboard</a></li>
                                                      <li class="active"><i class="material-icons">view_list</i> Educations</li>
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

                                              <a href="{{ route('education.create')  }}"  style="
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
                                                                             Sub Title</th>
                                                                             <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;">
                                                                              Action</th></tr>
                                                                          </thead>
                                                                          <tbody>
                                                                            @foreach($educations as $key => $ad)
                                                                           <tr role="row" class="even">
                                                                                  <td class="sorting_1">{{ $key + 1  }}</td>
                                                                                  <td>{{  $ad->title  }}</td>
                                                                                  <td>
                                                                                  {{  $ad->sub_title  }}

                                                                                   </td>
                                                                               <td>
                                                                                   <div class="js-modal-buttons button-demo">
                                                                                <button style="display: inline" type="button" class="btn bg-black  waves-effect m-r-20"
                                                                                data-toggle="modal" data-target="#largeModal-{{$ad->id}}"> <i class="material-icons">view_array</i> </button>
                                                                                     <a  class="btn btn-info btn-sm"  href="{{ route('education.edit',$ad->id)  }}" title="Edit"> <i class="material-icons">mode_edit</i>  </a>
                                                                                      <form   style="margin:0px 2px  ;display:inline"  action="{{  route('education.destroy',$ad->id)}}" id="date-form-{{ $ad->id}}" method="post">
                                                                                    {{ csrf_field() }}
                                                                                          {{  method_field('DELETE') }}
                                                                                    </form>
                                                                                    <a class="btn btn-danger btn-sm"  onclick="
                                                                                    if(confirm('Are You Sure, You Want To Delete This Education..!?')){
                                                                                    event.preventDefault();document.getElementById('date-form-{{ $ad->id}}').submit()
                                                                                    }else{
                                                                                    event.preventDefault();
                                                                                  }"  href="{{  route('education.destroy',$ad->id) }}"><i class="material-icons">delete</i>   </a>
                                                                                   </div></td>

                                                                              </tr>
                                                                              <div class="modal fade" id="largeModal-{{$ad->id}}" tabindex="-1" role="dialog" style="display: none; padding-right: 17px;">
                                                                                              <div class="modal-dialog modal-lg" role="document">
                                                                                                  <div class="modal-content modal-col-red">
                                                                                                      <div class="modal-header">
                                                                                                          <h4 class="modal-title" id="largeModalLabel">{{ $ad->title   }}</h4>
                                                                                                      </div>
                                                                                                      <div class="modal-body">
                                                                                                             <h5 class="modal-title">Title : {{ $ad->title   }}</h5>
                                                                                                            <p class="modal-title">

                                                                                                          <h4> Sub Title:  {{$ad->sub_title}}      </h4>
                                                                                                          <h4> From:  {{$ad->from}}      </h4>
                                                                                                          <h4> To:  {{$ad->to}}      </h4>
                                                                                                          <h4> Description:  {{$ad->desc}}      </h4>
                                                                                                          </p>                                                                               </div>
                                                                                                      <div class="modal-footer">
                                                                                                      <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
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
                                                              </div>


                                       </div>
                                  </div>
            </div>
            <!-- #END# Basic Examples -->
            </div></div>
</section>

@endsection

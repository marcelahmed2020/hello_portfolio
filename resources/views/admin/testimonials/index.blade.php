@section('site_name','testimonials')
@section('content')
@extends('admin.layouts_RKh._app')
<section class="content">
<div class="container-fluid">

            <div class="block-header">
            <div class="row">
              <div class="col-md-6">
               <h2>
                Testimonials Table
                <small>  {{ auth()->user()->name  }} </small>
              </h2>
              </div>
              <div class="col-md-6">
                  <ol class="breadcrumb breadcrumb-bg-black">
                                              <li><a href="{{ route('dashboard')  }}">
                                              <i class="material-icons">home</i> Dashboard</a></li>
                                              <li class="active"><i class="material-icons">view_list</i> Testimonials</li>
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
                                              Testimonials
                                              <a href="{{ route('testimonials.create')  }}"   style="
    padding: 5px;
    background-color: black;
    color: #fff;
"   class="pull-right" class="btn btn-primary"> <i class="material-icons">plus_one</i> </a>
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
                                                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">
                                                                              Name</th>    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">
                                                                                      Job description</th>      <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">
                                                                                      Message</th>     <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;">
                                                                              Image</th>


                                                                             <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;">
                                                                              Action</th></tr>
                                                                          </thead>
                                                                          <tbody>
                                                                            @foreach($testimonials as $key => $val)
                                                                           <tr role="row" class="even" >
                                                                                  <td class="sorting_1">{{ $key + 1  }}</td>
                                                                                   <td>{{  $val->name  }} </td>
                                                                                   <td>{{  $val->job_desc  }} </td>
                                                                                   <td>{{  $val->desc  }} </td>
                                                                                    <td>
                                                                                    @if($val->image != 0)
                                                                                        <img src="{{ url('marc/images/'.$val->image)  }}" width="100px" height="100px">
                                                                                     @endif
                                                                                   </td>
                                                                                   <td>
                                                                                   <div class="js-modal-buttons button-demo">
                                                                                      <a class="btn btn-info btn-sm" href="{{ route('testimonials.edit',$val->id)  }}" title="Edit"> <i class="material-icons">mode_edit</i>  </a>
                                                                                       <form   style="margin:0px 2px  ;display:inline"
                                                                                       action="{{ route('testimonials.destroy',$val->id)  }}" id="date-form-testimonials-{{ $val->id}}"
                                                                                       method="post">
                                                                                           {{ method_field('DELETE')  }}
                                                                                     {{ csrf_field() }}
                                                                                     </form>

                                                                                     <a class="btn btn-danger btn-sm"  onclick="
                                                                                     if(confirm('Are You Sure, You Want To Delete This  Testimonial  !?')){
                                                                                     event.preventDefault();document.getElementById('date-form-testimonials-{{ $val->id}}').submit()
                                                                                     }else{
                                                                                     event.preventDefault();
                                                                                   }"  href="{{ route('testimonials.destroy',$val->id)  }}"><i class="material-icons">delete</i>   </a>
                                                                                   </div>
                                                                                   </td>
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

@section('site_name','sliders')
@section('content')
@extends('admin.layouts_RKh._app')
<section class="content">
<div class="container-fluid">

            <div class="block-header">
            <div class="row">
              <div class="col-md-6">
               <h2>
                sliders Table
                <small>  {{ auth()->user()->name  }} </small>
              </h2>
              </div>
              <div class="col-md-6">
                  <ol class="breadcrumb breadcrumb-bg-black">
                                              <li><a href="{{ route('dashboard')  }}">
                                              <i class="material-icons">home</i> Dashboard</a></li>
                                              <li class="active"><i class="material-icons">view_list</i> Sliders</li>
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
                                                sliders
                                  @permission('create_sliders')
                                              <a href="{{ route('sliders.create')  }}"  style="
    padding: 5px;
    background-color: black;
    color: #fff;
"  title="" class="pull-right" class="btn btn-primary"> <i class="material-icons">plus_one</i> </a>
                                                      @endpermission
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
                                                                              Title</th>    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">
                                                                              Sub Title</th>    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">
                                                                              Description</th>    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 100px;">
                                                                              Image</th>


                                                                             <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;">
                                                                              Action</th></tr>
                                                                          </thead>
                                                                          <tbody>
                                                                            @foreach($sliders as $key => $slider)
                                                                           <tr role="row" class="even" style="@if($slider->one == 1)
                                                                             background-color:#dddddd;
                                                                           @endif">
                                                                                  <td class="sorting_1">{{ $key + 1  }}</td>
                                                                                   <td>{{  $slider->title  }}</td>
                                                                                   <td>{{  $slider->sub_title  }}</td>
                                                                                   <td>{{  $slider->description  }}</td>
                                                                                   <td>
                                                                                    @if($slider->image != 0)
                                                                                        <img src="{{ url('RKhB/sliders_images/'.$slider->image)  }}" width="100px" height="100px">
                                                                                     @endif
                                                                                   </td>
                                                                                   <td>
                                                                                   <div class="js-modal-buttons button-demo">
                                                                                <button style="display: inline" type="button" class="btn bg-black  waves-effect m-r-20"
                                                                                data-toggle="modal" data-target="#largeModal-{{$slider->id}}"> <i class="material-icons">view_array</i> </button>

                                                                                  @permission('update_sliders')
                                                                                     <a class="btn btn-info btn-sm" href="{{ route('sliders.edit',$slider->id)  }}" title="Edit"> <i class="material-icons">mode_edit</i>  </a>
                        @if($slider->one != 1)

           <form   style="margin:0px 2px  ;display:inline"
                   action="{{ route('sliders.favour',$slider->id)  }}" id="date-form-check-sliders-{{ $slider->id}}"
                   method="post">

               {{ csrf_field() }}
               {{ method_field('put') }}

           </form>

           <a class="btn btn-primary btn-sm"  onclick="
               if(confirm('Are You Sure, You Want To Make This Slider In Manu!?')){
               event.preventDefault();document.getElementById('date-form-check-sliders-{{ $slider->id}}').submit()
               }else{
               event.preventDefault();
               }"  href="{{ route('sliders.favour',$slider->id)  }}"><i class="material-icons">check</i>   </a>
                                                                                       @endif

                                                                                       @endpermission

                                                                                  @permission('delete_sliders')
                                                                                      <form   style="margin:0px 2px  ;display:inline"
                                                                                       action="{{ route('sliders.delete',$slider->id)  }}" id="date-form-sliders-{{ $slider->id}}"
                                                                                       method="post">
                                                                                     {{ csrf_field() }}
                                                                                     </form>

                                                                                     <a class="btn btn-danger btn-sm"  onclick="
                                                                                     if(confirm('Are You Sure, You Want To Delete This Slider!?')){
                                                                                     event.preventDefault();document.getElementById('date-form-sliders-{{ $slider->id}}').submit()
                                                                                     }else{
                                                                                     event.preventDefault();
                                                                                   }"  href="{{ route('sliders.delete',$slider->id)  }}"><i class="material-icons">delete</i>   </a>
                                                                                  @endpermission
                                                                                   </div>                                                                                    </td>
                                                                                                                                                                        </td>
                                                                              </tr>
                                                                              </tr>
                                                                              <div class="modal fade" id="largeModal-{{$slider->id}}" tabindex="-1" role="dialog" style="display: none; padding-right: 17px;">
                                                                                              <div class="modal-dialog modal-lg" role="document">
                                                                                                  <div class="modal-content modal-col-red">
                                                                                                      <div class="modal-header">
                                                                                                          <h4 class="modal-title" id="largeModalLabel">{{ $slider->title   }}</h4>
                                                                                                      </div>
                                                                                                      <div class="modal-body">
                                                                                                             <h5 class="modal-title">title : {{ $slider->title   }}</h5>
                                                                                                            <p class="modal-title">
                                                                                                          <h5 class="modal-title">title : {{ $slider->title   }}</h5>
                                                                                                          <h5 class="modal-title">Sub title : {{ $slider->sub_title   }}</h5>
                                                                                                          <h6 class="modal-title">description : {{ $slider->description   }}</h6>
                                                                                                            </p>
                                                                                                          <hr>
                                                                                                            @if($slider->image != 0)

                                                                                                            <img src="{{ url('RKhB/sliders_images/'.$slider->image) }}"  width="100%" height="320px" />
                                                                                                            @endif
                                                                                                      </div>
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
      </div>
</div></section>

@endsection

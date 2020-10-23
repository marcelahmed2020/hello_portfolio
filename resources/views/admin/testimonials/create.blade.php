@section('site_name','Add Testimonial')
@extends('admin.layouts_RKh._app')
@section('content')
<section class="content">
<div class="container-fluid">
            <div class="block-header">
                    <div class="row">
                      <div class="col-md-6">
                                         <h2>
                                         Add Testimonial
                                          <small>  {{ auth()->user()->name  }}  </small>
                                        </h2>
                                        </div>
                      <div class="col-md-6">

                          <ol class="breadcrumb breadcrumb-bg-black">
                         <li><a href="{{ route('dashboard')  }}"><i class="material-icons">home</i>Dashboard</a></li>
                              <li><a href="{{ route('testimonials.index')  }}"><i class="material-icons">view_list</i>  Testimonials</a></li>
                       <li class="active"><a href="#"> Add Testimonial</a></li>

                                                    </ol>
                      </div>
                    </div>

            </div>
            <!-- Basic Examples -->

           <div class="row clearfix">
          <form action="{{ route('testimonials.store') }}" method="post" enctype="multipart/form-data">

                               {{ csrf_field() }}
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <div class="card">
                                   <div class="header">
                                       <h2>
                                         Add Testimonial
                                       </h2>
                                   </div>
                                   <div class="body">
                                       <div class="row clearfix">
                                           <div class="col-sm-6">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                       <input type="text" name="name" value="{{ old('name')  }}"  class="form-control" placeholder="Name">

                                                   </div>
                                               </div>
                                           </div>     <div class="col-sm-6">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                       <input type="text" name="job_desc" value="{{ old('job_desc')  }}"  class="form-control" placeholder="Job Description">

                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col-sm-12">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                       <label for="desc">Description</label>
                                                       <textarea name="desc" rows="10" id="desc" class="form-control" placeholder="Description">{{ old('desc')  }}</textarea>

                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col-sm-6">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                       <input type="file" name="image" class="form-control">
                                                   </div>
                                               </div>
                                           </div>
                                           <button type="submit" class="btn btn-block btn-lg bg-black waves-effect">
                                               <i class="material-icons">save</i>
                                               <span>ADD</span></button>
                                       </div>
                            </div>
                               </div>
                           </div>

           </form>

            </div>
      </div>
</section>

@endsection

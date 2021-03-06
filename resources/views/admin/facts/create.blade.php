@section('site_name','ADD FACT')
@section('content')
@extends('admin.layouts_RKh._app')
<section class="content">
<div class="container-fluid">
            <div class="block-header">
                    <div class="row">
                      <div class="col-md-6">
                                         <h2>
                                             ADD FACT
                                          <small>  {{ auth()->user()->name  }}  </small>
                                        </h2>
                                        </div>
                      <div class="col-md-6">

                        <ol class="breadcrumb breadcrumb-bg-black">
                         <li><a href="{{ route('dashboard')  }}"><i class="material-icons">home</i>Dashboard</a></li>
                            <li><a href="{{ route('facts.index')  }}">FACTS</a></li>
                       <li class="active"><a href="#"> ADD FACT</a></li>

                                                    </ol>
                      </div>
                    </div>

            </div>
            <!-- Basic Examples -->

           <div class="row clearfix">
          <form action="{{ route('facts.store') }}" method="post" enctype="multipart/form-data">

                               {{ csrf_field() }}
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <div class="card">
                                   <div class="header">
                                       <h2>
                                           ADD FACT
                                       </h2>
                                   </div>
                                   <div class="body">
                                       <div class="row clearfix">
                                           <div class="col-sm-6">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                       <label for="title">Title</label>
                                                       <input type="text" name="title" id="title" class="form-control" value="{{ old('title')  }}" placeholder="Title">
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col-sm-6">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                       <label id="sub_title">Sub Title</label>
                                                       <input type="text" name="sub_title"  id="sub_title" class="form-control" value="{{ old('sub_title')  }}" placeholder="Sub Title">
                                                   </div>
                                               </div>
                                           </div><div class="col-sm-6">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                       <label for="icon"><a target="_blank" href="https://icofont.com/icons">https://icofont.com/icons</a></label>
                                                       <input type="text" id="icon"  name="icon" class="form-control" value="{{ old('icon')  }}" placeholder="Icon https://icofont.com/icons">
                                                   </div>
                                               </div>
                                           </div>
                                      <div class="col-sm-6">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                       <label for="number">Number</label>
                                                       <input type="number" id="number" name="number" value="{{ old('number')  }}"  class="form-control" placeholder="Numbers...">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="row clearfix">
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

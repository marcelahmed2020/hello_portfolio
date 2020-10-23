@section('site_name','About')
@section('content')
@extends('admin.layouts_RKh._app')
<section class="content">
<div class="container-fluid">
            <div class="block-header">
                    <div class="row">
                      <div class="col-md-6">
                                         <h2>
                                         About
                                          <small>  {{ auth()->user()->name  }}  </small>
                                        </h2>
                                        </div>
                      <div class="col-md-6">

                        <ol class="breadcrumb breadcrumb-bg-black">
                         <li><a href="{{ route('dashboard')  }}"><i class="material-icons">home</i>Dashboard</a></li>

                       <li class="active"><a href="#">  About</a></li>

                                                    </ol>
                      </div>
                    </div>

            </div>
            <!-- Basic Examples -->

           <div class="row clearfix">
          <form action="{{ route('about') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <div class="card">
                                   <div class="header">
                                       <h2>
                                         About
                                       </h2>
                                   </div>
                                   <div class="body">
                                       <div class="row clearfix">
                                         <div class="col-sm-6">
                                             <div class="form-group">
                                                 <div class="form-line">
                                                   <input type="hidden" name="about_id" value="{{ $about->id }}">
                                                     <input type="text" name="title" value="{{ $about->title }}" class="form-control" placeholder=" Title">

                                                 </div>
                                             </div>
                                         </div>
                                                                                   <div class="col-sm-6">
                                             <div class="form-group">
                                                 <div class="form-line">
                                                     <input type="text" name="birthday" value="{{ $about->birthday }}" class="form-control" placeholder="birthday">

                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-sm-6">
                                             <div class="form-group">
                                                 <div class="form-line">
                                                     <input type="text" name="age" value="{{ $about->age }}" class="form-control" placeholder="Age">

                                                 </div>
                                             </div>
                                         </div>
                                           <div class="col-sm-6">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                       <input type="text" name="website" value="{{ $about->website }}" class="form-control" placeholder="https://wwww.my.website.com">

                                                   </div>
                                               </div>
                                           </div>
                                         <div class="col-sm-6">
                                             <div class="form-group">
                                                 <div class="form-line">
                                                     <input type="text" name="phone" value="{{ $about->phone }}" class="form-control" placeholder="Phone">

                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-sm-6">
                                             <div class="form-group">
                                                 <div class="form-line">
                                                     <input type="text" name="freelance" value="{{ $about->freelance }}" class="form-control" placeholder="Freelance">

                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-sm-6">
                                             <div class="form-group">
                                                 <div class="form-line">
                                                     <input type="text" name="degree" value="{{ $about->degree }}" class="form-control" placeholder="Degree">

                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-sm-12">
                                             <div class="form-group">
                                                 <div class="form-line">
                                                   <textarea name="sub_title" rows="8" cols="80" class="form-control" placeholder="Sub Title">{{ $about->sub_title }}</textarea>

                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-sm-12">
                                             <div class="form-group">
                                                 <div class="form-line">
                                                   <textarea name="desc" rows="8" cols="80" class="form-control" placeholder="Description">{{ $about->desc }}</textarea>

                                                 </div>
                                             </div>
                                         </div>
                                           <div class="col-sm-6">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                   <label  for="image">Image : (289.98X289.98)</label>
                                                   <input type="file" name="image" id="image" class="form-control">
                                                    @if ($about->image != 0)
                                                    <input type="hidden" name="old_image"  value="{{$about->image}}">
                                                    <img src="{{url('marc/images/'.$about->image)}}" width="200px" height="200px" alt="">
                                                    @endif
                                                   </div>
                                               </div>
                                           </div>
                                           <button type="submit" class="btn btn-block btn-lg bg-black waves-effect">
                                               <i class="material-icons">save</i>
                                               <span>Update</span></button>

                                       </div>
                            </div>
                               </div>
                           </div>

           </form>

            </div>
      </div>
</section>

@endsection

@section('site_name','Update Profile')
@section('content')
@extends('admin.layouts_RKh._app')
<section class="content">
<div class="container-fluid">
            <div class="block-header">
                    <div class="row">
                      <div class="col-md-6">
                                         <h2>
                                             Update Profile
                                          <small>  {{ auth()->user()->name  }}  </small>
                                        </h2>
                                        </div>
                      <div class="col-md-6">

                        <ol class="breadcrumb breadcrumb-bg-black">
                         <li><a href="{{ route('dashboard')  }}"><i class="material-icons">home</i>Dashboard</a></li>
                         <li class="active"><a href="#">Profile</a></li>
                         </ol>
                      </div>
                    </div>
            </div>
            <!-- Basic Examples -->
           <div class="row clearfix">
          <form action="{{ route('users.do_profile',$user->id) }}" method="post" enctype="multipart/form-data">
                               {{ csrf_field() }}
              {{ method_field('put') }}
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <div class="card">
                                   <div class="header">
                                       <h2>
                                         Update
                                       </h2>
                                   </div>
                                   <div class="body">
                                       <div class="row clearfix">
                                           <div class="col-sm-6">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                       <input  value="{{ $user->name }}" type="text" name="name" class="form-control" placeholder="Name">
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col-sm-6">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                       <input type="email" name="email" value="{{ $user->email }}" class="form-control" autocomplete="off" placeholder="E-mail Address">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="row clearfix">
                                           <div class="col-sm-6">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                       <input type="password" name="password" class="form-control" placeholder="Password">
                                                       <input type="hidden" name="old_password" class="form-control" value="{{$user->password}}">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="row clearfix">
                                           <div class="col-sm-6">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                       <label for="image">Image:</label>
                                                       <input type="file"  id="image" name="image" class="form-control">
                                                       @if ($user->image != 0)
                                                           <input type="hidden" name="old_image"  value="{{$user->image}}">
                                                           <img src="{{url('marc/images/'.$user->image)}}" width="200px" height="200px" alt="">
                                                       @endif

                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col-sm-6">
                                               <div class="form-group">
                                                   <div class="form-line">
                                                       <label for="max_image">Max Image:</label>
                                                       <input type="file"  id="max_image" name="max_image" class="form-control">
                                                       @if ($user->max_image != 0)
                                                           <input type="hidden" name="old_max_image"  value="{{$user->max_image}}">
                                                           <img src="{{url('marc/images/'.$user->max_image)}}" width="200px" height="200px" alt="">
                                                       @endif

                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>

           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="card">
               <div class="body"><button type="submit" class="btn btn-block btn-lg bg-black waves-effect">
                  <i class="material-icons">save</i>
                  <span>UPDATE</span>
                  </button>
                  </div>
              </div>
           </div>
           </form>

            </div>
      </div>
</section>

@endsection

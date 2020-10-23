@section('site_name','ADD SKILL')
@section('content')
@extends('admin.layouts_RKh._app')
<section class="content">
<div class="container-fluid">
            <div class="block-header">
                    <div class="row">
                      <div class="col-md-6">
                                         <h2>
                                             ADD SKILL
                                          <small>  {{ auth()->user()->name  }}  </small>
                                        </h2>
                                        </div>
                      <div class="col-md-6">

                        <ol class="breadcrumb breadcrumb-bg-black">
                         <li><a href="{{ route('dashboard')  }}"><i class="material-icons">home</i>Dashboard</a></li>
                            <li><a href="{{ route('skills.index')  }}">SKILLS</a></li>
                       <li class="active"><a href="#"> ADD SKILL</a></li>

                                                    </ol>
                      </div>
                    </div>

            </div>
            <!-- Basic Examples -->

           <div class="row clearfix">
          <form action="{{ route('skills.store') }}" method="post" >
                               {{ csrf_field() }}
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               <div class="card">
                                   <div class="header">
                                       <h2>
                                           ADD SKILL
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
                                                       <label for="progress">Progress</label>
                                                       <input type="number" id="progress" name="progress" value="{{ old('progress')  }}"  class="form-control" placeholder="Progress...">
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

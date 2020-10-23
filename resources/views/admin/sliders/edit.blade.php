@section('site_name','Edit Slider')
@extends('admin.layouts_RKh._app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2>
                            Edit Slider
                            <small>  {{ auth()->user()->name  }}  </small>
                        </h2>
                    </div>
                    <div class="col-md-6">

                        <ol class="breadcrumb breadcrumb-bg-black">
                            <li><a href="{{ route('dashboard')  }}"><i class="material-icons">home</i>Dashboard</a></li>
                            <li><a href="{{ route('sliders.index')  }}"><i class="material-icons">view_list</i>  sliders</a></li>
                            <li class="active"><a href="#"><i class="material-icons">mode_edit</i> Edit Slider</a></li>

                        </ol>
                    </div>
                </div>

            </div>
            <!-- Basic Examples -->

            <div class="row clearfix">
                <form action="{{ route('sliders.update', $slider->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Edit Slider
                                </h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="title" value="{{ $slider->title?:old('title')  }}"  class="form-control" placeholder="Title">

                                            </div>
                                        </div>
                                    </div>                                           <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="sub_title" value="{{ $slider->sub_title?:old('sub_title')  }}" class="form-control" placeholder="Sub Title">

                                            </div>
                                        </div>
                                    </div>                                           <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea name="description" class="form-control" placeholder="Description.."  rows="8">{{ $slider->description?:old('description')  }}</textarea>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="image" class="form-control">
                                                <input type="hidden" name="old_image" value="{{ $slider->image  }}">
                                                <img src="{{ url('RKhB/sliders_images/'.$slider->image)  }}" width="100px" height="100px">


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

@section('site_name','Edit Portfolio')
@extends('admin.layouts_RKh._app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2>
                            Edit Portfolio
                            <small>  {{ auth()->user()->name  }}  </small>
                        </h2>
                    </div>
                    <div class="col-md-6">

                        <ol class="breadcrumb breadcrumb-bg-black">
                            <li><a href="{{ route('dashboard')  }}"><i class="material-icons">home</i>Dashboard</a></li>
                            <li><a href="{{ route('portfolios.index')  }}"><i class="material-icons">view_list</i>  Portfolios</a></li>
                            <li class="active"><a href="#"> Portfolio</a></li>

                        </ol>
                    </div>
                </div>

            </div>
            <!-- Basic Examples -->

            <div class="row clearfix">
                <form action="{{ route('portfolios.update',$education->id) }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Edit Portfolio
                                </h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="title" value="{{ $education->title  }}"  class="form-control" placeholder="Title">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="link" value="{{ $education->link  }}" class="form-control" placeholder="LINK https://www.marcel.com/">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="image" class="form-control">
                                                @if ($education->image != 0)
                                                    <input type="hidden" name="old_image"  value="{{$education->image}}">
                                                    <img src="{{url('marc/images/'.$education->image)}}" width="200px" height="200px" alt="">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-lg bg-black waves-effect">
                                        <i class="material-icons">save</i>
                                        <span>UPDATE</span></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </section>

@endsection

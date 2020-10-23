@section('site_name','Edit PROFESSIONAL EXPERIENCE')
    @extends('admin.layouts_RKh._app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2>
                            Edit PROFESSIONAL EXPERIENCE
                            <small>  {{ auth()->user()->name  }}  </small>
                        </h2>
                    </div>
                    <div class="col-md-6">

                        <ol class="breadcrumb breadcrumb-bg-black">
                            <li><a href="{{ route('dashboard')  }}"><i class="material-icons">home</i>Dashboard</a></li>
                            <li><a href="{{ route('professionalexperiences.index')  }}">PROFESSIONAL EXPERIENCE</a></li>
                            <li class="active"><a href="#"> Edit PROFESSIONAL EXPERIENCE</a></li>

                        </ol>
                    </div>
                </div>

            </div>
            <!-- Basic Examples -->

            <div class="row clearfix">
                <form action="{{ route('professionalexperiences.update',$proex->id) }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Edit PROFESSIONAL EXPERIENCE
                                </h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" id="title" class="form-control" value="{{ $proex->title  }}" placeholder="Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label id="sub_title">Sub Title</label>
                                                <input type="text" name="sub_title"  id="sub_title" class="form-control" value="{{ $proex->sub_title  }}" placeholder="Sub Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label id="from">From</label>
                                                <input type="text" name="from"  id="from" class="form-control" value="{{ $proex->from  }}" placeholder="From">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label id="to">To</label>
                                                <input type="text" name="to"  id="to" class="form-control" value="{{ $proex->to  }}" placeholder="To">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label id="desc">Description</label>
                                                <textarea name="desc" id="desc"  class="form-control" cols="30" placeholder="Description" rows="10">{{ $proex->desc  }}</textarea>
                                            </div>
                                        </div>
                                    </div> <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label id="desc2">Description 2</label>
                                                <textarea name="desc2" id="desc2"  class="form-control" cols="30" placeholder="You Can Put `0` If You Don't Want Make Description  " rows="10">{{ $proex->desc2  }}</textarea>
                                            </div>
                                        </div>
                                    </div> <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label id="desc3">Description 3</label>
                                                <textarea name="desc3" id="desc3"  class="form-control" cols="30"  placeholder="You Can Put `0` If You Don't Want Make Description  " rows="10">{{ $proex->desc3  }}</textarea>
                                            </div>
                                        </div>
                                    </div> <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label id="desc4">Description 4</label>
                                                <textarea name="desc4" id="desc4"  class="form-control" cols="30"  placeholder="You Can Put `0` If You Don't Want Make Description  " rows="10">{{ $proex->desc4  }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
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

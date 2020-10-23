@section('site_name','Edit Summaries')
@section('content')
    @extends('admin.layouts_RKh._app')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-md-6">
                        <h2>
                            Edit Summaries
                            <small>  {{ auth()->user()->name  }}  </small>
                        </h2>
                    </div>
                    <div class="col-md-6">

                        <ol class="breadcrumb breadcrumb-bg-black">
                            <li><a href="{{ route('dashboard')  }}"><i class="material-icons">home</i>Dashboard</a></li>
                            <li><a href="{{ route('summaries.index')  }}">Summaries</a></li>
                            <li class="active"><a href="#"> Edit Summaries</a></li>

                        </ol>
                    </div>
                </div>

            </div>
            <!-- Basic Examples -->

            <div class="row clearfix">
                <form action="{{ route('summaries.update',$summary->id) }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('put')  }}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Edit Summaries
                                </h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label for="title">Title</label>
                                                <input type="text" name="title" id="title" class="form-control" value="{{ $summary->title  }}" placeholder="Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label id="name">Name</label>
                                                <input type="text" name="name"  id="name" class="form-control" value="{{ $summary->name  }}" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label id="adress">Adress</label>
                                                <input type="text" name="adress"  id="adress" class="form-control" value="{{ $summary->adress  }}" placeholder="Adress">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label id="phone">Phone</label>
                                                <input type="text" name="phone"  id="phone" class="form-control" value="{{ $summary->phone  }}" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label id="name">Email</label>
                                                <input type="email" name="email"  id="email" class="form-control" value="{{ $summary->email  }}" placeholder="Email">
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

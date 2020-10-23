@section('site_name',' | '.__('site.portfolios'))
@extends('dashboard.layouts._app')
@section('content')

    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')  }}">@lang('site.dashboard')</a></li>
                <li  class="breadcrumb-item active" aria-current="page"><a href="#">@lang('site.portfolios')</a></li>
            </ol>
        </nav>
        <!-- Page Heading -->
        <h1 class="h3 m-0 font-weight-bold text-primary">@lang('site.DataTablesportfoliosList')   </h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-header py-3">
                <a href="{{ route('admin.portfolios.create')  }}" class="btn btn-primary btn-icon-split" style="float: right">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text"> @lang('site.add_portfolio')</span>
                </a>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>@lang('site.id')</th>
                            <th>@lang('site.title')</th>
                            <th>@lang('site.links')</th>
                            <th>@lang('site.action')</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>@lang('site.id')</th>
                                <th>@lang('site.title')</th>
                            <th>@lang('site.links')</th>
                            <th>@lang('site.action')</th>

                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($portfolios as $key => $portfolio)
                            <tr role="row" class="even">
                                <td class="sorting_1">{{ $key + 1  }}</td>
                                <td>{{  $portfolio->title  }}</td>

                                <td>{{  $portfolio->links  }} </td>
                                <td>
                                    <div class="js-modal-buttons button-demo">
                                        <a  class="btn btn-info btn-sm"  href="{{ route('admin.portfolios.edit',$portfolio->id)  }}" title="@lang('site.edit')"> <i class="fas fa-edit"></i>  </a>
                                        <form   style="margin:0px 2px  ;display:inline"  action="{{  route('admin.portfolios.destroy',$portfolio->id)}}" id="date-form-{{ $portfolio->id}}" method="post">
                                            {{ csrf_field() }}
                                            {{  method_field('DELETE') }}
                                        </form>
                                        <a class="btn btn-danger btn-sm"  onclick="
                                            if(confirm('@lang('site.Are_You_Sure_You_Want_To_Delete_This_Skill')')){
                                            event.preventDefault();document.getElementById('date-form-{{ $portfolio->id}}').submit()
                                            }else{
                                            event.preventDefault();
                                            }"  href="{{  route('admin.portfolios.destroy',$portfolio->id) }}"><i class="fas fa-trash"></i>   </a>
                                    </div></td>

                            </tr>

                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>



@endsection

@php
$url = Request::url();
@endphp
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard')  }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{$settings->site_name}}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard')  }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>@lang('site.dashboard')</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">

  @lang('site.Interface')

    </div>


     <li class="nav-item   @php  if (preg_match('/aboutus/i',$url)){echo  'active';} @endphp">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseaboutus" aria-expanded="true" aria-controls="collapseaboutus">
            <i class="fas fa-fw fa-list"></i>
            <span>  @lang('site.aboutus') </span>
        </a>
        <div id="collapseaboutus" class="collapse @php  if (preg_match('/aboutus/i',$url)){echo  'show';} @endphp" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> @lang('site.aboutus') @lang('site.components'):</h6>
                 <a class="collapse-item @php  if (preg_match('/aboutus/i',$url)){echo  'active';} @endphp" href="{{ route('admin.aboutus.index')  }}">@lang('site.view') </a>
                <a class="collapse-item @php  if (preg_match('/aboutus/i',$url)){echo  'active';} @endphp" href="{{ route('admin.aboutus.create')  }}">@lang('site.add') </a>
             </div>
        </div>
    </li>

     <li class="nav-item   @php  if (preg_match('/prices/i',$url)){echo  'active';} @endphp">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseprices" aria-expanded="true" aria-controls="collapseprices">
            <i class="fas fa-fw fa-list"></i>
            <span>  @lang('site.prices') </span>
        </a>
        <div id="collapseprices" class="collapse @php  if (preg_match('/prices/i',$url)){echo  'show';} @endphp" aria-labelledby="headingpricesTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> @lang('site.prices') @lang('site.components'):</h6>
                 <a class="collapse-item @php  if (preg_match('/prices/i',$url)){echo  'active';} @endphp" href="{{ route('admin.prices.index')  }}">@lang('site.view') </a>
                <a class="collapse-item @php  if (preg_match('/prices/i',$url)){echo  'active';} @endphp" href="{{ route('admin.prices.create')  }}">@lang('site.add') </a>
             </div>
        </div>
    </li>


     <li class="nav-item   @php  if (preg_match('/skills/i',$url)){echo  'active';} @endphp">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseprices" aria-expanded="true" aria-controls="collapseprices">
            <i class="fas fa-fw fa-list"></i>
            <span>  @lang('site.skills') </span>
        </a>
        <div id="collapseprices" class="collapse @php  if (preg_match('/skills/i',$url)){echo  'show';} @endphp" aria-labelledby="headingskillsTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> @lang('site.skills') @lang('site.components'):</h6>
                 <a class="collapse-item @php  if (preg_match('/skills/i',$url)){echo  'active';} @endphp" href="{{ route('admin.skills.index')  }}">@lang('site.view') </a>
                <a class="collapse-item @php  if (preg_match('/skills/i',$url)){echo  'active';} @endphp" href="{{ route('admin.skills.create')  }}">@lang('site.add') </a>
             </div>
        </div>
    </li>
     <li class="nav-item   @php  if (preg_match('/services/i',$url)){echo  'active';} @endphp">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseservices" aria-expanded="true" aria-controls="collapseprices">
            <i class="fas fa-fw fa-list"></i>
            <span>  @lang('site.services') </span>
        </a>
        <div id="collapseservices" class="collapse @php  if (preg_match('/services/i',$url)){echo  'show';} @endphp" aria-labelledby="headingservicesTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> @lang('site.services') @lang('site.components'):</h6>
                 <a class="collapse-item @php  if (preg_match('/services/i',$url)){echo  'active';} @endphp" href="{{ route('admin.services.index')  }}">@lang('site.view') </a>
                <a class="collapse-item @php  if (preg_match('/services/i',$url)){echo  'active';} @endphp" href="{{ route('admin.services.create')  }}">@lang('site.add') </a>
             </div>
        </div>
    </li>
  <li class="nav-item   @php  if (preg_match('/portfolios/i',$url)){echo  'active';} @endphp">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseportfolios" aria-expanded="true" aria-controls="collapseportfolios">
            <i class="fas fa-fw fa-list"></i>
            <span>  @lang('site.portfolios') </span>
        </a>
        <div id="collapseportfolios" class="collapse @php  if (preg_match('/portfolios/i',$url)){echo  'show';} @endphp" aria-labelledby="headingportfoliosTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> @lang('site.portfolios') @lang('site.components'):</h6>
                 <a class="collapse-item @php  if (preg_match('/portfolios/i',$url)){echo  'active';} @endphp" href="{{ route('admin.portfolios.index')  }}">@lang('site.view') </a>
                <a class="collapse-item @php  if (preg_match('/portfolios/i',$url)){echo  'active';} @endphp" href="{{ route('admin.portfolios.create')  }}">@lang('site.add') </a>
             </div>
        </div>
    </li>
  <li class="nav-item   @php  if (preg_match('/educations/i',$url)){echo  'active';} @endphp">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseeducations" aria-expanded="true" aria-controls="collapseeducations">
            <i class="fas fa-fw fa-list"></i>
            <span>  @lang('site.educations') </span>
        </a>
        <div id="collapseeducations" class="collapse @php  if (preg_match('/educations/i',$url)){echo  'show';} @endphp" aria-labelledby="headingeducationsTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> @lang('site.educations') @lang('site.components'):</h6>
                 <a class="collapse-item @php  if (preg_match('/educations/i',$url)){echo  'active';} @endphp" href="{{ route('admin.educations.index')  }}">@lang('site.view') </a>
                <a class="collapse-item @php  if (preg_match('/educations/i',$url)){echo  'active';} @endphp" href="{{ route('admin.educations.create')  }}">@lang('site.add') </a>
             </div>
        </div>
    </li>
    <li class="nav-item   @php  if (preg_match('/professional_experiences/i',$url)){echo  'active';} @endphp">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseprofessional_experiences" aria-expanded="true" aria-controls="collapseprofessional_experiences">
            <i class="fas fa-fw fa-list"></i>
            <span>  @lang('site.professional_experiences') </span>
        </a>
        <div id="collapseprofessional_experiences" class="collapse @php  if (preg_match('/professional_experiences/i',$url)){echo  'show';} @endphp" aria-labelledby="headingprofessional_experiencesTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header"> @lang('site.professional_experiences') <br> @lang('site.components'):</h6>
                 <a class="collapse-item @php  if (preg_match('/professional_experiences/i',$url)){echo  'active';} @endphp" href="{{ route('admin.professional_experiences.index')  }}">@lang('site.view') </a>
                <a class="collapse-item @php  if (preg_match('/professional_experiences/i',$url)){echo  'active';} @endphp" href="{{ route('admin.professional_experiences.create')  }}">@lang('site.add') </a>
             </div>
        </div>
    </li>


     <li class="nav-item @php  if (preg_match('/settings/i',$url)){echo  'active';} @endphp">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Settings</span>
        </a>

        <div id="collapsefive" class="collapse @php  if (preg_match('/settings/i',$url) || preg_match('/trash/i',$url)){echo  'show';} @endphp" aria-labelledby="headingfiv" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Site settings components:</h6>
                 <a class="collapse-item @php  if (preg_match('/settings/i',$url)){echo  'active';} @endphp" href="{{ route('admin.settings.index')  }}">View</a>

{{--                <a class="collapse-item @php  if (preg_match('/trash/i',$url)){echo  'active';} @endphp" href="{{ route('admin.trash.index')  }}">trash</a>--}}

            </div>
        </div>
    </li>

    <!-- Nav Item  -->


    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

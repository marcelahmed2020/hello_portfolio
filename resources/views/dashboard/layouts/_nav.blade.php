@php
    $url = Request::url();
@endphp
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-globe fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    @lang('site.languages')
                </h6>

        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)


                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"   class="dropdown-item d-flex align-items-center">
                        <div>
                            <span class="font-weight-bold">
                            {{ $properties['native'] }}  {!!  $locale = App::getLocale()  == $localeCode ? " #":""  !!}


                    </span>
                </div>
            </a>
        @endforeach
            </div>
        </li>
{{--         @if(unreadcontacts()->count() > 0)--}}
{{--        <!-- Nav Item - Messages -->--}}
{{--        <li class="nav-item dropdown no-arrow mx-1">--}}
{{--            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                <i class="fas fa-envelope fa-fw"></i>--}}
{{--                <!-- Counter - Messages -->--}}
{{--                <span class="badge badge-danger badge-counter">{{ unreadcontacts()->count() > 0 ? unreadcontacts()->count() : ''  }}</span>--}}
{{--            </a>--}}
{{--            <!-- Dropdown - Messages -->--}}
{{--            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">--}}
{{--                <h6 class="dropdown-header">--}}
{{--                    Message Center--}}
{{--                </h6>--}}
{{--                @foreach(unreadcontacts()->take(10) as $unreadcon)--}}
{{--                    <a class="dropdown-item d-flex align-items-center" href="{{route('contact.show',$unreadcon->id)}}">--}}
{{--                        <div class="dropdown-list-image mr-3">--}}
{{--                            <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">--}}
{{--                            <div class="status-indicator bg-success"></div>--}}
{{--                        </div>--}}
{{--                        <div class="font-weight-bold">--}}
{{--                            <div class="text-truncate">{{ substr($unreadcon->subject,0,20) }}..</div>--}}
{{--                            <div class="small text-gray-500">{{$unreadcon->full_name}} · {{$unreadcon->created_at->diffForHumans()}}</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}

{{--                @endforeach--}}
{{--        <a class="dropdown-item text-center small text-gray-500" href="{{route('contact.index')}}">Read More Messages</a>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--             @endif--}}
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ '@'.auth()->user()->name  }}</span>
                @if(auth()->user()->avatar_path)
                 <img  class="img-profile rounded-circle" width="80px" height="80px" src="{{ url('/avatars/'.auth()->user()->avatar_path)}}">
               @endif
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in @php  if (preg_match('/profile/i',$url)){echo  'show';} @endphp" aria-labelledby="userDropdown">
                <a class="dropdown-item @php  if (preg_match('/profile/i',$url)){echo  'active';} @endphp" href="{{ route('admin.profile.index')  }}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    @lang('site.profile')
                </a>
                <a class="dropdown-item @php  if (preg_match('/settings/i',$url)){echo  'active';} @endphp"  href="{{ route('admin.settings.index') }}">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>

                    @lang('site.settings')

                </a>
{{--                <a class="dropdown-item" href="{{ route('activities',auth()->id()) }}">--}}
{{--                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>--}}
{{--                    Activities--}}
{{--                </a>--}}
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                    @lang('site.logout')

                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->



<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('site.ReadytoLeave') ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">@lang('site.Select_Logout_below_if_you_are_ready_to_end_your_current_session').</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('site.cancel')</button>
                <a class="btn btn-primary" href="{{ route('admin.logout')  }}">@lang('site.logout')</a>
            </div>
        </div>
    </div>
</div>

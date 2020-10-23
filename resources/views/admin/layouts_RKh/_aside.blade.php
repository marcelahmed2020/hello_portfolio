<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                 @if ((auth()->user()->image) != 0)
                   <img src="{{url('marc/images/'.auth()->user()->image)}}" width="48" height="48" alt="{{auth()->user()->name}}" />
                   @else
                <img src="{{url('/RKhB')}}/images/user.png" width="48" height="48" alt="User" />
                 @endif
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  {{ auth()->user()->name }}  </div>
                <div class="email">  {{ auth()->user()->email }} </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                @php
                $url = Request::url();
                @endphp

                <li class="{{ ($url == route('dashboard'))?'active':''}}">
                        <a  href="{{ route('dashboard')}}">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>

                        </a>
                    </li>
      <li class="{{ ($url == route('profile'))?'active':''}}">
              <a  href="{{ route('profile')}}">
                  <i class="material-icons">supervisor_account</i>
                  <span>PROFILE</span>

              </a>
          </li>
                <li class="{{ ($url == route('about'))?'active':''}}">
              <a  href="{{ route('about')}}">
                  <i class="material-icons">info</i>
                  <span>ABOUT</span>

              </a>
          </li>

                <li class="{{ ($url == route('services.index'))?'active':''}}">
                    <a  href="{{ route('services.index')}}">
                        <i class="material-icons">insert_comment</i>
                        <span>SERVICES</span>

                    </a>
                </li>s
                <li class="{{ ($url == route('education.index'))?'active':''}}">
              <a  href="{{ route('education.index')}}">
                  <i class="material-icons">airplay</i>
                  <span>EDUCATION</span>

              </a>
          </li>   <li class="{{ ($url == route('professionalexperiences.index'))?'active':''}}">
              <a  href="{{ route('professionalexperiences.index')}}">
                  <i class="material-icons">work</i>
                  <span>PROFESSIONAL EXPERIENCE</span>

              </a>
          </li>
      <li class="{{ ($url == route('testimonials.index'))?'active':''}}">
              <a  href="{{ route('testimonials.index')}}">
                  <i class="material-icons">insert_comment</i>
                  <span>TESTIMONIALS</span>

              </a>
          </li>
                <li class="{{ ($url == route('portfolios.index'))?'active':''}}">
                    <a  href="{{ route('portfolios.index')}}">
                        <i class="material-icons">burst_mode</i>
                        <span>PORTFOLIOS</span>

                    </a>
                </li>
                <li class="{{ ($url == route('facts.index'))?'active':''}}">
              <a  href="{{ route('facts.index')}}">
                  <i class="material-icons">explore</i>
                  <span>FACTS</span>

              </a>
          </li>

                <li class="{{ ($url == route('skills.index'))?'active':''}}">
              <a  href="{{ route('skills.index')}}">
                  <i class="material-icons">filter_9_plus</i>
                  <span>SKILLS</span>

              </a>
          </li>
                <li class="{{ ($url == route('summaries.index'))?'active':''}}">
                    <a  href="{{ route('summaries.index')}}">
                        <i class="material-icons">looks</i>
                        <span>SUMMARY</span>

                    </a>
                </li>
                <li class="{{ ($url == route('settings.index'))?'active':''}}">
                    <a  href="{{ route('settings.index')}}">
                        <i class="material-icons">settings</i>
                        <span>SETTINGS</span>

                    </a>
                </li>

            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                Copyright By   <a href="{{url('/')}}"> {{ siteSetting()->site_name  }}
                </a> © 2020 All Rights reserved
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5V
            </div>
        </div>
        <!-- #Footer -->
    </aside>

    <!-- #END# Right Sidebar -->

</section>

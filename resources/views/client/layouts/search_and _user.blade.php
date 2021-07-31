<nav class="navbar-classic navbar navbar-expand-lg">
    <a id="nav-toggle" href="#"><i
        data-feather="menu"

        class="nav-icon me-2 icon-xs"></i></a>
    <div class="ms-lg-3 d-none d-md-none d-lg-block">
      <!-- Form -->
      <form class="d-flex align-items-center">
        <input type="search" class="form-control" placeholder="Search" />
      </form>
    </div>
    <!--Navbar nav -->
    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
      <!-- List -->
      <li class="dropdown ms-2">
        <a class="rounded-circle" href="#" role="button" id="dropdownUser"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-md avatar-indicators avatar-online">
            <img alt="avatar" src="{{asset('assets/images/avatar/avatar-1.jpg')}}"
              class="rounded-circle" />
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end"
          aria-labelledby="dropdownUser">
          <div class="px-4 pb-0 pt-2">


            <div class="lh-1 ">
              <h5 class="mb-1"> {{ !Auth::guard('client')->guest() ? Auth::guard('client')->user()->name : '' }}</h5>
              <a href="{{route('client.profile')}}" class="text-inherit fs-6">View my profile</a>
            </div>
            <div class=" dropdown-divider mt-3 mb-2"></div>
          </div>

          <ul class="list-unstyled">

            <li>
              <a class="dropdown-item" href="#">
                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>Edit
                Profile
              </a>
            </li>
            <li>
              <a class="dropdown-item"
                href="#">
                <i class="me-2 icon-xxs dropdown-item-icon"
                  data-feather="activity"></i>Activity Log
              </a>
            </li>

            <li>
              <a class="dropdown-item text-primary" href="#">
                <i class="me-2 icon-xxs text-primary dropdown-item-icon"
                  data-feather="star"></i>Go Pro
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <i class="me-2 icon-xxs dropdown-item-icon"
                  data-feather="settings"></i>Account Settings
              </a>
            </li>
              <!-- Authentication Links -->
              @if (Auth::guard('client')->guest())
              <li>
                <a class="dropdown-item" href="{{ route('client.login') }}">
                  <i class="me-2 icon-xxs dropdown-item-icon"
                    data-feather="settings"></i>{{ __('Login') }}
                </a>
              </li>
              @if (Route::has('client.register'))
                  <li>
                    <a class="dropdown-item" href="{{ route('client.register') }}">
                      <i class="me-2 icon-xxs dropdown-item-icon"
                        data-feather="settings"></i>{{ __('Register') }}
                    </a>
                  </li>
              @endif
          @else
          <li>
            <a class="dropdown-item" href="{{ route('client.logout') }}"
            onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
              <i class="me-2 icon-xxs dropdown-item-icon"
              data-feather="power"></i>{{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('client.logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </li>
        @endguest
          </ul>

        </div>
      </li>
    </ul>
  </nav>
  @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
  @endif
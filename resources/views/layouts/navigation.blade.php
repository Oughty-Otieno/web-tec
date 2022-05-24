<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse margin" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ url('/home') }}">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('about_us.index') }}">About_us</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('academics.index') }}">Academics</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('programs.index') }}">Programmes</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('departments.index') }}">Departments</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('staffs.index') }}">Staff</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('programs.index') }}">Contact_us</a>
                      </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

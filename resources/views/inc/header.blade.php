<nav class="navbar navbar-expand-lg header-nav">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
{{-- 
  <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarTogglerDemo03">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Kênh Người Bán</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tải ứng dụng</a>
      </li>
      <li class="nav-item">
        <span class="nav-link" href="#">Kết nối
          <a href="http://"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="http://"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </span>
      </li>
    </ul>

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://"><i class="fa fa-bell-o" aria-hidden="true"></i> Thông Báo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Trợ Giúp</a>
      </li>
      @if (Route::has('login'))
        @auth
          <li class="nav-item drop-down">
              <a href="{{ url('/home') }}" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button">
                {{ Auth()->user()->name }}
              </a>

              <ul class="dropdown-menu" role="menu">
                <li class="">
                  <a href="{{ route('logout') }}" class="nav-link">Thông Tin Cá Nhân</a>
                </li>
                <li class="">
                  <a href="{{ route('logout') }}" class="nav-link">Đăng Xuất</a>
                </li>
              </ul>
          </li>
          <li class="dropdown nav-item">
            <a href="{{ url('/home') }}" class="nav-link dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth()->user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button">Thông Tin Cá Nhân</button>
              <a href="{{ route('logout') }}" class="dropdown-item">Đăng Xuất</a>
            </div>
          </li>
        @else
          <li class="nav-item">
              <a href="{{ route('login') }}" class="nav-link">Đăng Nhập</a>
          </li>
            @if (Route::has('register'))
              <li class="nav-item">
                  <a href="{{ route('register') }}" class="nav-link">Đăng Ký</a>
              </li>
            @endif
        @endauth
      @endif
    </ul>
  </div> --}}

  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/Admin') }}">Admin</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</div>
</nav>
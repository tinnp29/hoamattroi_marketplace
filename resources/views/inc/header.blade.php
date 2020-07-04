  <nav class="nav-top">
    <div class="left">
      <ul>
        <li><a href="">Kênh Người Bán</a></li>
        <li><a href="">Tải Ứng Dụng</a></li>
        <li>
          <span class="connect" href="#">Kết Nối
            <a href="http://"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="http://"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </span>
        </li>
      </ul>
    </div>
    <div class="right">
      <ul>
        <li>
          <a class="" href="http://"><i class="fa fa-bell-o" aria-hidden="true"></i> Thông Báo</a>
        </li>
        <li class="">
          <a class="" href="http://"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Trợ Giúp</a>
        </li>
        @guest
            <li class="">
              <a href="{{ route('login') }}" class="">Đăng Nhập</a>
            </li>
          @if (Route::has('register'))
            <li class="">
              <a href="{{ route('register') }}" class="">Đăng Ký</a>
            </li>
          @endif
        @else
          <li class="dropdown">
              <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('/Admin') }}">Vào Trang Quản Trị</a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Đăng Xuất') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
        @endguest
      </ul>
    </div>
  </nav>

  <nav class="nav-bot">
    <div class="logo">
      <h3><a href="#">SunFlower <i class="fa fa-paper-plane-o" aria-hidden="true"></i></a></h3>
    </div>
    <div class="search-nav">
      <form class="form-inline">
        <input class="form-control" type="search" placeholder="Xin chào ! Bạn muốn mua gì ?" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">
          <i class="fa fa-search" aria-hidden="true"></i>
        </button>
      </form>
      <div class="top-categories-navi">
        <ul>
          <li><a href="">Quần Ống Rộng</a></li>
          <li><a href="">Ốp Lưng Iphone</a></li>
          <li><a href="">Áo Nữ</a></li>
          <li><a href="">Giày Thể Thao Nữ</a></li>
          <li><a href="">Áo Thun Nam</a></li>
          <li><a href="">Áo Khoác Nữ</a></li>
          <li><a href="">Tai Nghe Bluetooth</a></li>
        </ul>
      </div>
    </div>
    <div class="cart">
      <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
    </div>
  </nav>



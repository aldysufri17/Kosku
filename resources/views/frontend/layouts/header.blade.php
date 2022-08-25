  <!-- ======= Header ======= -->
  <header id="header" class="{{Request::path() != '/' ? 'nav':''}} fixed-top d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
          <h1 class="logo fw-bold"><a href="/"></i>K<i class="bi bi-house-heart-fill"></i>SKU</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <nav id="navbar" class="navbar">
              <ul>
                  <li><a class="nav-link scrollto" href="/">Home</a></li>
                  <li><a class="nav-link scrollto" href="/daftar">Daftar</a></li>
                  <li><a class="nav-link scrollto" href="/status">Status</a></li>
                  <li><a class="nav-link scrollto" href="/booking">Booking</a></li>
                  <li><a class="nav-link scrollto" href="/favorit">Favorit</a></li>
                  <li><a class="nav-link scrollto" href="/bukti">bukti</a></li>
                  @if (!Auth::check())
                  <li><a class="nav-link scrollto" href="{{route('login')}}">Login</a></li>
                  @else
                  {{-- <li class="dropdown"><a href="#"><span>Data Audit</span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="{{route('audit.input')}}">Tambah Data Audit</a></li>
                          <li><a href="#">Lihat Statistik</a></li>
                      </ul>
                  </li> --}}
                  <li class="dropdown" style="width: 30px"><a href="#"><img class="my-2" style="border-radius: 50%"
                              width="30px"
                              src="{{ asset(auth()->user()->foto ? 'images/profil/'. auth()->user()->foto : 'backend/assets/img/avatar/avatar-1.png') }}"></a>
                      <ul>
                          <li><a href="{{route('profile.detail')}}">Profile</a></li>
                          <li><a class="nav-link scrollto" href="{{ route('logout') }}"
                                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                          </li>
                      </ul>
                  </li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                  @endif
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->

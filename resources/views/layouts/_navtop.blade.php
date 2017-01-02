<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
          <!-- Branding Image -->
            <div class="">
              <a class="navbar-brand text-center" href="{{ url('/') }}">
                <span><img src="{{asset('storage/img/XD.png')}}" style="max-height:24px" alt=""></span>&nbsp;
                <span class="abel" style="color:#000"><b>{{ config('app.name', 'SULBAR') }}</b>
                  <small><sup>beta</sup></small>&nbsp;|
                  <small>Data Indonesia</</small>
                </span>
              </a>
              <!-- Collapsed Hamburger -->

                <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="fa fa-arrows fa-spin "></span>
                </button>
            </div>



        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right text-center">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login <i class="fa fa-universal-access" aria-hidden="true"></i></a></li>
                    <li><a href="{{ url('/register') }}">Register <i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
                @else
                  <li>
                    <a href="{{url('home')}}">
                      Dashboard
                    </a>
                  </li>
                  <!-- DropDown USER MENU -->
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="fa fa-fw fa-arrow-circle-o-down"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                          <li><a href="{{route('tipe.index')}}"><small>Tipe</small></a></li>
                          <li><a href="{{route('penyedia.index')}}"><small>Penyedia</small></a></li>
                          <li><a href="#"><small>Layanan</small></a></li>
                          <li><a href="#"><small>Produk</small></a></li>
                          <li role="separator" class="divider"></li>
                          <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <small>Logout</small>
                            </a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                          </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
 </nav>

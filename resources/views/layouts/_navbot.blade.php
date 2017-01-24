<nav class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <div class="navbar-header">
          <!-- Branding Image -->
            <div class="">
              <a class="navbar-brand text-center" href="{{ url('/') }}">
                <h6>© Copyright 2017</h6>
              </a>


            </div>
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-bottom">
              <span class="sr-only">Toggle Navigation</span>
              <span class="fa fa-fw fa-arrow-up"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse navbar-right" id="app-navbar-bottom">
            <!-- Left Side Of Navbar -->
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right text-center">
                <!-- Authentication Links -->
                  <li><a href="{{url('disclaimer')}}">Disclaimer</a></li>
                  <li><a href="{{url('sk')}}">Syarat & Ketentuan</a></li>
                  <li><a href="{{url('faq')}}">FAQ</a></li>
            </ul>
        </div>
    </div>
 </nav>

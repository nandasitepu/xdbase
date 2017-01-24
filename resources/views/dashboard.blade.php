@extends('layouts.main')
@section('title')
  Home
@endsection
@section('css')
  <link rel="stylesheet" href="/css/admin/dashboard.css">
@endsection
@section('scripts')
  <script type="text/javascript">
    /* off-canvas sidebar toggle */
    $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
        $('.collapse').toggleClass('in').toggleClass('hidden-xs').toggleClass('visible-xs');
    });
  </script>
@endsection

@section('content')
  <!-- Commented Out
  <div class="container">
    <div class="row">
      <div class="col-md-12">
     --> <!-- Social Media Button
        <div class="btn-group">
          <button class="btn btn-default btn-sm disabled">
          Share:
        </button>
          <a class="btn btn-default btn-sm" target="_blank" title="Like On Facebook" href="#">
            <i class="fa fa-thumbs-o-up fa-lg fb"></i>
          </a>
          <a class="btn btn-default btn-sm" target="_blank" title="On Facebook" href="#">
            <i class="fa fa-facebook fa-lg fb"></i>
          </a>
          <a class="btn btn-default btn-sm" target="_blank" title="On Twitter" href="#">
            <i class="fa fa-twitter fa-lg tw"></i>
          </a>
          <a class="btn btn-default btn-sm" target="_blank" title="On Google Plus" href="#">
            <i class="fa fa-google-plus fa-lg google"></i>
          </a>
          <a class="btn btn-default btn-sm" target="_blank" title="On LinkedIn" href="#">
            <i class="fa fa-linkedin fa-lg linkin"></i>
          </a>
          <a class="btn btn-default btn-sm" target="_blank" title="Pin It" href="#">
            <i class="fa fa-pinterest fa-lg pinterest"></i>
          </a>
        </div>
         Social Media Button
      </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-black">
                <div class="panel-heading">Artikel</div>
                <div class="panel-body fixed-panel">
                    @foreach (App\Penyedia::paginate(5) as $p )
                      <ul class="fa-ul">
                        <li><i class="fa-li fa fa-check-square"></i>{{$p->fullname  }}</li>
                      </ul>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-blue">
                <div class="panel-heading">Layanan</div>
                <div class="panel-body fixed-panel">
                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-purple">
                <div class="panel-heading">Produk</div>
                <div class="panel-body fixed-panel">
                    You are logged in!
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-green">
                <div class="panel-heading">Review</div>
                <div class="panel-body fixed-panel">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
  </div>
  -->
  </style>
  <div class="wrapper">
      <div class="row row-offcanvas row-offcanvas-left">
          <!-- sidebar -->
          <div class="column col-sm-1 col-xs-1 sidebar-offcanvas" id="sidebar">
              <ul class="nav" id="menu">
                  <li><a href="#"><i class="fa fa-list-alt"></i> <span class="collapse in hidden-xs">Link 1</span></a></li>
                  <li><a href="#"><i class="fa fa-list"></i> <span class="collapse in hidden-xs">Stories</span></a></li>
                  <li><a href="#"><i class="fa fa-paperclip"></i> <span class="collapse in hidden-xs">Saved</span></a></li>
                  <li><a href="#"><i class="fa fa-refresh"></i> <span class="collapse in hidden-xs">Refresh</span></a></li>
                  <li>
                      <a href="#" data-target="#item1" data-toggle="collapse"><i class="fa fa-list"></i> <span class="collapse in hidden-xs">Menu <span class="caret"></span></span></a>
                      <ul class="nav nav-stacked collapse left-submenu" id="item1">
                          <li><a href="google.com">View One</a></li>
                          <li><a href="gmail.com">View Two</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="#" data-target="#item2" data-toggle="collapse"><i class="fa fa-list"></i> <span class="collapse in hidden-xs">Menu <span class="caret"></span></span></a>
                      <ul class="nav nav-stacked collapse" id="item2">
                          <li><a href="#">View One</a></li>
                          <li><a href="#">View Two</a></li>
                          <li><a href="#">View Three</a></li>
                      </ul>
                  </li>
                  <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span class="collapse in hidden-xs">Link</span></a></li>
              </ul>
          </div>
          <!-- /sidebar -->

          <!-- main right col -->
          <div class="column col-sm-9 col-xs-11" id="main">
              <p><a href="#" data-toggle="offcanvas" <i class="fa fa-navicon fa-2x"></i></a></p>
          </div>
          <!-- /main -->
      </div>
  </div>

@endsection
@section('navbot')
  @include('layouts._navbot')
@endsection

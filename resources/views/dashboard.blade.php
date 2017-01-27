@extends('layouts.main')
@section('title')
  Dashboard Home
@endsection
@section('css')
  <link rel="stylesheet" href="/css/admin/dashboard.css">
  <style media="screen">
  body{margin-top:20px; margin-bottom: 60px}
  .fa-fw {width: 2em;}
  </style>
@endsection
@section('scripts')
  <script type="text/javascript">
    /* off-canvas sidebar toggle */
    $('[data-toggle=offcanvas]').click(function() {
        $('.row-offcanvas').toggleClass('active');
        $('.collapse').toggleClass('in').toggleClass('hidden-xs').toggleClass('visible-xs');
    });
  </script>
  <script type="text/javascript">
      $(document).ready(function()
    {
      var navItems = $('.admin-menu li > a');
      var navListItems = $('.admin-menu li');
      var allWells = $('.admin-content');
      var allWellsExceptFirst = $('.admin-content:not(:first)');

      allWellsExceptFirst.hide();
      navItems.click(function(e)
      {
          e.preventDefault();
          navListItems.removeClass('active');
          $(this).closest('li').addClass('active');

          allWells.hide();
          var target = $(this).attr('data-target-id');
          $('#' + target).show();
      });
    });
  </script>
@endsection

@section('content')
  @include('layouts._navtop')
  <div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Section 1
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Section 2
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Section 3
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              Section 1
                          </a>
                      </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              Section 1
                          </a>
                      </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              Section 1
                          </a>
                      </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
  </div>




  <div class="container">
    <div class="row">
      <div class="col-md-12 panel panel-body">
        <h2>Dashboard</h2>
        <div class="btn-group pull-right">
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
      </div>
    </div>
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
  <hr>
  <div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked admin-menu">
                <li class="active"><a href="#" data-target-id="home"><i class="fa fa-home fa-fw"></i>Home</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="widgets"><i class="fa fa-list-alt fa-fw"></i>Widgets</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="pages"><i class="fa fa-file-o fa-fw"></i>Pages</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="charts"><i class="fa fa-bar-chart-o fa-fw"></i>Charts</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="table"><i class="fa fa-table fa-fw"></i>Table</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="forms"><i class="fa fa-tasks fa-fw"></i>Forms</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="calender"><i class="fa fa-calendar fa-fw"></i>Calender</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="library"><i class="fa fa-book fa-fw"></i>Library</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="applications"><i class="fa fa-pencil fa-fw"></i>Applications</a></li>
                <li><a href="http://www.jquery2dotnet.com" data-target-id="settings"><i class="fa fa-cogs fa-fw"></i>Settings</a></li>
            </ul>
        </div>
        <div class="col-md-9 well admin-content" id="home">
            <p>
                Hello! This is a forked snippet.<br>
                It is for users, which use one-page layouts.
            </p>
            <p>
                Here's the original one from BhaumikPatel: <a href="http://bootsnipp.com/snippets/featured/vertical-admin-menu" target="_BLANK">Vertical Admin Menu</a>
                <br>
                Thank you Baumik!
            </p>
        </div>
        <div class="col-md-9 well admin-content" id="widgets">
            Widgets
        </div>
        <div class="col-md-9 well admin-content" id="pages">
            Pages
        </div>
        <div class="col-md-9 well admin-content" id="charts">
            Charts
        </div>
        <div class="col-md-9 well admin-content" id="table">
            Table
        </div>
        <div class="col-md-9 well admin-content" id="forms">
            Forms
        </div>
        <div class="col-md-9 well admin-content" id="calender">
            Calender
        </div>
        <div class="col-md-9 well admin-content" id="library">
            Library
        </div>
        <div class="col-md-9 well admin-content" id="applications">
            Applications
        </div>
        <div class="col-md-9 well admin-content" id="settings">
            Settings
        </div>
    </div>

  </div>

</div>
<br>
<br>
<br>
<br>
  @include('layouts._navbot')
@endsection

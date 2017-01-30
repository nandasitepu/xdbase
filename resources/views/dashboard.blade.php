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

@section('navtop')
  @include('layouts._navtop')
@endsection

@section('content')
  <div class="container">
    <div class="row">
        <!--  Side Menu -->
        <button class="btn btn-default btn-block btn-xs visible-xs" data-toggle="collapse" data-target="#sidemenu">
          <i class="fa fa-th" aria-hidden="true"></i>
        </button>

        <div class="col-md-3 panel panel-default collapse in" id="sidemenu">
            <ul class="nav nav-pills nav-stacked admin-menu " data-spy="affix" data-offset-top="50">
                <li class="active"><a href="#" data-target-id="home"><i class="fa fa-home fa-fw"></i>Home</a></li>
                <li><a href="#" data-target-id="widgets"><i class="fa fa-list-alt fa-fw"></i>Widgets</a></li>
                <li><a href="#" data-target-id="pages"><i class="fa fa-file-o fa-fw"></i>Pages</a></li>
                <li><a href="#" data-target-id="charts"><i class="fa fa-bar-chart-o fa-fw"></i>Charts</a></li>
                <li><a href="#" data-target-id="table"><i class="fa fa-table fa-fw"></i>Table</a></li>
                <li><a href="#" data-target-id="forms"><i class="fa fa-tasks fa-fw"></i>Forms</a></li>
                <li><a href="#" data-target-id="calender"><i class="fa fa-calendar fa-fw"></i>Calender</a></li>
                <li><a href="#" data-target-id="library"><i class="fa fa-book fa-fw"></i>Library</a></li>
                <li><a href="#" data-target-id="applications"><i class="fa fa-pencil fa-fw"></i>Applications</a></li>
                <li><a href="#" data-target-id="settings"><i class="fa fa-cogs fa-fw"></i>Settings</a></li>
            </ul>
        </div>
        <!--  The Content -->
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



@endsection

@section('navbot')
  @include('layouts._navbot')
@endsection

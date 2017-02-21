@extends('layouts.main')
@section('title')
  Dashboard Home
@endsection
@section('css')
  <link rel="stylesheet" href="/css/admin/dashboard.css">
  <style media="screen">
  body{margin-top:20px; margin-bottom: 60px}
  .fa-fw {width: 2em;}
  </style>
@endsection
@section('scripts')
  <script src="../js/my-vue.js" charset="utf-8"></script>
  <script src="../js/chart.js" charset="utf-8"></script>
  <script>
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
          datasets: [{
              label: '# of Votes',
              data: [12, 19, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
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
      <div class="col-md-3">

        <div class="panel panel-default">
          <div class="panel-body">
            <a href="#" data-target-id="social"><i class="fa fa-th fa-fw"></i>Social Counter</a>
          </div>
        </div>
        <button class="btn btn-default btn-block btn-xs hidden-xs" data-toggle="collapse" data-target="#sidemenu">
          <i class="fa fa-th" aria-hidden="true"></i>
        </button>
      </div>
      <div class="col-md-9">
        <div class="col-md-3">
          <div class="panel panel-default">
            <div class="panel-body">
              <a href="#"><i class="fa fa-facebook fa-3x"></i>&nbsp;
              <span class="label label-primary">12345</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="panel panel-default">
            <div class="panel-body">
              <a href="#"><i class="fa fa-twitter fa-3x"></i>&nbsp;
              <span class="label label-info">12345</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-body">
                <a href="#"><i class="fa fa-google-plus fa-3x"></i>&nbsp;
                <span class="label label-danger">12345</span>
              </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <a href="#"><i class="fa fa-linkedin fa-3x"></i>&nbsp;
              <span class="btn btn-default btn-xs"><small>12345</small></span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"></h3>
          </div>
          <div class="panel-body">
            
          </div>
          <div class="panel-footer">

          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"></h3>
          </div>
          <div class="panel-body">
            <canvas id="myChart" width="400" height="100"></canvas>
          </div>
          <div class="panel-footer">

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
      <div class="row">
        <!--  Side Menu -->
        <div class="col-xs-12">
          <button class="btn btn-default btn-block btn-xs visible-xs" data-toggle="collapse" data-target="#sidemenu">
            <i class="fa fa-th" aria-hidden="true"></i>
          </button>
        </div>

        <div class="col-md-3 collapse in" id="sidemenu">

          <div class="panel panel-default">
            <ul class="nav nav-pills nav-stacked admin-menu" >
              <li><a href="#" data-target-id="home"><i class="fa fa-home fa-fw"></i>Home</a></li>
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
        </div>
        <!--  The Content -->
        <div class="col-md-9 admin-content" id="home">
          <h3 class="lato text-center">
            <span class="btn btn-primary btn-block">Daftar Layanan </span>
          </h3>
          <br>
          <!-- HIDDEN ON SMALL SCREEN -->
          <div class="panel panel-default hidden-xs">
            <div class="table-responsive panel-body">
              <table class="table table-condensed table-bordered">
                 <thead class="thead-inverse">
                   <tr style="background-color: #eee">
                     <th class="text-center">ID</th>
                     <th class="text-center">Provinsi</th>
                     <th class="text-center">Ibukota</th>
                     <th class="text-center">Logo</th>
                     <th class="text-center">Action</th>
                   </tr>
                 </thead>
                 <tbody>
                    @foreach ($provinsi as $prov)
                    <tr>
                      <td class="text-center">{{ $prov->id}}</td>
                      <td>
                       {{  ucfirst(trans($prov->nama)) }}
                      </td>
                      <td>{{ucfirst(trans($prov->ibukota))}}</td>
                      <td class="text-center"><img src="{{ asset('storage/img/provinsi/' . $prov->image) }}" alt="" width="75px" height="75px"></td>
                      <td class="text-center">
                       <div class="btn-group btn-group-sm">
                         <button type="button" class="btn btn-info">
                           <i class="fa fa-bar-chart-o" aria-hidden="true"></i>&nbsp; Chart
                         </button>
                         <button type="button" class="btn btn-primary">
                           <i class="fa fa-edit" aria-hidden="true"></i>&nbsp; Edit
                         </button>
                         <button type="button" class="btn btn-danger">
                           <i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Delete
                         </button>
                       </div>
                     </td>
                    </tr>
                    @endforeach

                 </tbody>
               </table>
            </div>
          </div>

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

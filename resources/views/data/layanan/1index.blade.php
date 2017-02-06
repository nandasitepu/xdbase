@extends('layouts.main')
@section('title')
  Daftar Layanan
@endsection
@section('css')
 <link rel="stylesheet" href="/css/data/layanan.css">
@endsection
@section('scripts')
  <script type="text/javascript">
      $(document).ready(function(e){
        $('.search-panel .dropdown-menu').find('a').click(function(e) {
        e.preventDefault();
        var param = $(this).attr("href").replace("#","");
        var concept = $(this).text();
        $('.search-panel span#search_concept').text(concept);
        $('.input-group #search_param').val(param);
      });
    });
  </script>

  <script type="text/javascript">/* Ajax Load More */
      var page = 1;
      // Trigger click on button
      $("#loadmore").click(function (e) {
        page++;
        loadMoreData(page);
      });
      // Load More Function
      function loadMoreData(page){
        $.ajax(
              {
                  url: '?page=' + page,
                  type: "get",
                  beforeSend: function()
                  {
                    $('.ajax-load').show();
                  }
              })
              .done(function(data)
              {
                if(data.html == ""){
                  $('#loadmore').hide();
                  $('.ajax-load').html("<br /> <h4> ... Habis ... </h4>");
                  return;
                }
                $('#loadmore').show();
                $('.ajax-load').hide();
                $("#post-data").append(data.html);

              })
              .fail(function(jqXHR, ajaxOptions, thrownError)
               {
                  alert('server not responding...');
                });
      }
  </script>
@endsection
@section('navtop')
  @include('layouts._navtop')
@endsection
@section('content')
  <div class="container">
    <!-- Title -->
    <div class="row">
      <div class="col-md-12 text-center">
        <h3 class="abel">
          <span class="label label-primary">Daftar Layanan </span>
        </h3>
      </div>
      <div class="col-md-8 col-md-offset-2 text-center">
        <h3 class="lato">
          <span class="btn btn-default btn-block btn-sm">
            <i class="fa fa-binoculars fa-fw 2x" aria-hidden="true"></i>&nbsp;  Publik & Privat Data
          </span>
        </h3>
      </div>
    </div>
    <!-- SEARCH & MENU -->
    <div class="row">
      <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"></h3>
    </div>
    <div class="panel-body">
      <div class="col-md-5">
        <div class="well-sm text-center">
          <button class="custom btn btn-default btn-xs">
            <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Tambah
          </button>
          <button class="custom btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-cubes" aria-hidden="true"></i>&nbsp;  Penyedia
          </button>
          <button class="custom btn btn-default btn-xs">
            <i class="fa fa-tags" aria-hidden="true"></i>&nbsp; Tag
          </button>
          <button class="custom btn btn-default btn-xs">
            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>&nbsp; Urutkan
          </button>
        </div>
      </div>
      <div class="col-md-7">
        <div class="input-group">
          <div class="input-group-btn search-panel">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span id="search_concept">Filter</span> <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#contains">Penyedia</a></li>
                <li><a href="#its_equal">Layanan</a></li>
                <li><a href="#greather_than">Tag</a></li>
                <li class="divider"></li>
                <li><a href="#all">All</a></li>
              </ul>
          </div>
          <input type="hidden" name="search_param" value="all" id="search_param">
          <input type="text" class="form-control" name="x" placeholder="Search term...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
          </span>

        </div>
      </div>
    </div>
    <div class="panel-footer">

    </div>
  </div>
    </div>
    <br>
    <!-- Data Layanan-->
    <div class="row" id="post-data">

        @include('data.layanan.ajax')

    </div>
    <div class="row">
      <div class="col-md-12" >
        <span class="btn btn-default btn-sm btn-block" id="loadmore">
           More Data &nbsp; <i class="fa fa-crosshairs fa-fw 2x" aria-hidden="true"></i>
        </span>
      </div>
      <!-- /.row -->
      <div class="ajax-load text-center" style="display:none">
          <br />
         <p><span class="fa fa-cog fa-spin fa-2x"></span>&nbsp; Loading</p>
       </div>
    </div>
  </div>
@endsection
@section('navbot')
  @include('layouts._navbot')
@endsection

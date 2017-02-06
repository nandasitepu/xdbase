@extends('layouts.main')
@section('title')
  List Penyedia Data
@endsection
@section('css')
  <link rel="stylesheet" href="/css/data/penyedia.css">
@endsection
@section('scripts')
  <script src="js/data/penyedia.js" charset="utf-8"></script>
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
                $('.ajax-load').html("<br /> <h4> ... Data Habis ... </h4>");
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
  <!-- CONTENT -->
  <div class="main">
    <!-- Page Content -->
    <div class="container" style="padding-bottom:70px">
      <div class="row" style="padding:0px">
        @include('layouts._message')
        <div class="col-md-4">
          <div style="padding-top:30px">
            <h4><span class="label label-default">Index Penyedia Data</span></h4>
          </div>
        </div>
        <div class="col-md-8">
          <br>
          <div class="panel panel-default pull-right">
            <div class="panel-body text-center pad">
              <button type="button" class="btn btn-primary btn-xs custom">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp; Tambah
              </button>
              <button type="button" class="btn btn-success btn-xs custom">
                <i class="fa fa-cubes" aria-hidden="true"></i>&nbsp;  Tipe
              </button>
              <button type="button" class="btn btn-warning btn-xs custom">
                <i class="fa fa-tags" aria-hidden="true"></i>&nbsp; Tag
              </button>
              <button type="button" class="btn btn-info btn-xs custom">
                <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>&nbsp; Urutkan
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Penyedia Row -->
      <div class="row" id="post-data">
        @include('data.penyedia.ajax')
      </div>
      <div class="row">
        <div class="btn btn-default btn-sm btn-block" id="loadmore">
          More Data  &nbsp;  <i class="fa fa-plus-circle" aria-hidden="true"></i>
        </div>
      </div>
      <!-- /.row -->
      <div class="ajax-load text-center" style="display:none" >
         <br />
	       <p><span class="fa fa-cog fa-spin fa-2x"></span>&nbsp; Loading</p>
       </div>

    </div>
    <br />
    <br />
  </div>
@endsection

@section('navbot')
  @include('layouts._navbot')
@endsection

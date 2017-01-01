@extends('layouts.main')
@section('title')
  List Penyedia Data
@endsection
@section('css')
  <link rel="stylesheet" href="/css/penyedia/sidebar-nav.css">
@endsection
@section('scripts')
<script type="text/javascript">/* Ajax Load More */
  var page = 1;

  $("#loadmore").click(function (e) { //user clicks on button
    page++;
    loadMoreData(page);
  });

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
              $('.ajax-load').html("Sudah Semua Gan !!");
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

@section('content')
  @include('layouts._navtop')
  <!-- Side Menu -->
  <nav class="navbar navbar-default sidebar hidden-xs" role="navigation">
    <div class="container-fluid">
    	<!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
  			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
  				<span class="sr-only">Toggle navigation</span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  			</button>
		  </div>
		  <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="{{route('penyedia.create')}}">Add<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-plus-circle"></span></a></li>
				<li ><a href="#">Delete<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-trash-o"></span></a></li>
				<li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-comment-o"></span></a></li>
			</ul>
		</div>
    </div>
  </nav>
  <div class="main">
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <h3>&nbsp;<span class="label label-default">Index Penyedia Data</span></h3>
          <hr>
      </div>
    </div>

    <div class="container">
      <!-- Penyedia Row -->
      <div class="row" id="post-data">
        @include('data.penyedia.ajax')
      </div>
      <div class="btn btn-default btn-sm btn-block" id="loadmore">
        Penyedia Lainnya
      </div>

      <!-- /.row -->
      <div class="ajax-load text-center" style="display:none">
	       <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Penyedia Lainnya</p>
       </div>
       <br>
       <br>
       <br>
       <br>
    </div>
    <br />
    <br />
  </div>
  @include('layouts._navbot')
@endsection

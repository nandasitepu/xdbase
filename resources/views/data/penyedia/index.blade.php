@extends('layouts.main')
@section('title')
  List Penyedia Data
@endsection
@section('css')
  <link rel="stylesheet" href="/css/penyedia/sidebar-nav.css">
@endsection
@section('scripts')
<script src="/js/data/penyedia.js"></script>
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
      <div class="row">
        @foreach ($penyedia as $p)
          <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 portfolio-item">
            <a href="#">
              <img class="img-responsive img-thumbnail" src="{{ $p->image_path }}" alt="">
            </a>
            <div class="btn btn-block btn-sm btn-default">
              {{ $p->shortname }} <br>
              <small>{{ $p->updated_at }}</small>
            </div>
          </div>
        @endforeach
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="text-center">
          {{ $penyedia->links() }}
        </div>
      </div>
    </div>
    <br />
    <br />
  </div>
  @include('layouts._navbot')
@endsection

@extends('layouts.main')
@section('title')
  {{ $penyedia->fullname }}
@endsection
@section('css')
  <link rel="stylesheet" href="/css/penyedia/sidebar-nav.css">
@endsection
@section('scripts')

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
        <li><a href="{{route('penyedia.index')}}">Add<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-plus-circle"></span></a></li>
				<li><a href="{{route('penyedia.create')}}">Add<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-plus-circle"></span></a></li>
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


        <div class="col-md-12">
          <h3><span class="label label-default">  {{ $penyedia->fullname }}</span></h3>
          <br>
          <h4 class="">TIPE:&nbsp; <span class="label label-primary">{{$penyedia->tipe->fullname}}</span></h4>
          <hr>
          {{ $penyedia->desc}}
        </div>
      </div>
    </div>
  </div>
  @include('layouts._navbot')
@endsection

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
			<ul class="nav navbar-nav roboto">
        <li>
          <a href="{{route('penyedia.index')}}">Back to Index
            <span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-arrow-circle-o-left"></span>
          </a>
        </li>
				<li>
          <a href="{{route('penyedia.edit', $penyedia->id)}}">Edit
            <span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-pencil-square-o"></span>
          </a>
        </li>
				<li ><a href="#">Delete<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-trash-o"></span></a></li>
				<li ><a href="#">Komentar<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-comment-o"></span></a></li>
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
          <div class="" >
            <img src="{{ asset('storage/img/penyedia/' . $penyedia->image)}}" alt="" class="img-thumbnail" width="300px" align="left" style="margin:10px">
          </div>
          <div style="padding:10px 10px 70px 10px" class="roboto">
            {!! $penyedia->desc !!}
            <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

        </div>
      </div>
    </div>
  </div>
@include('layouts._navbot')
@endsection

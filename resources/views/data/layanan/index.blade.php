@extends('layouts.main')
@section('title')
  List Layanan
@endsection
@section('css')

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

@endsection

@section('content')
  @include('layouts._navtop')
  <div class="container">

    <div class="row">
      <div class="col-md-12 text-center">
        <h4>  <span class="label label-default lato">Daftar Layanan</span>  </h4>
      </div>
      <br>
      <div class="cool col-md-6 col-md-offset-3 col-xs-12 text-center" style="background-color:#fff;color:#000;">
        <h3 class="orbitron">Informasi Publik & Privat</h3>
      </div>
      <br>
      <div class="col-md-10 col-md-offset-1 col-xs-12">
              <br>
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


      <!-- Data Layanan-->
      @include('data.layanan.ajax')
    </div>
  </div>


  <br>
  <br>
  <br>
  <br>
  @include('layouts._navbot')
@endsection

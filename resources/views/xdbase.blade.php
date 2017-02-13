@extends('layouts.main')
@section('title')
  Pusat Informasi dan Data Indonesia
@endsection
@section('css')
  <link rel="stylesheet" href="/css/pages/homepage.css">
@endsection
@section('scripts')
  <script type="text/javascript"> /* Number Counter */
    $(document).ready(function () {
      $('.count1').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
      });
      $('.count2').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 6000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
      });
      $('.count3').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 7000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
      });
      $('#myCarousel').carousel({
       interval: 7000,
       pause: 'none'
     });
    });
  </script>
  <script type="text/javascript"> /* Search Filter */
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
@section('navtop')
  <!-- NAV TOP -->
  @include('layouts._navtop')
@endsection
@section('content')
  <!-- BACKGROUND SLIDER -->
  <div id="background-carousel">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active " style="background-image:url(../storage/img/pages/data1.jpg)"></div>
        <div class="item " style="background-image:url(../storage/img/pages/data2.jpg"></div>
        <div class="item " style="background-image:url(../storage/img/pages/data3.jpg)"></div>
        <div class="item " style="background-image:url(../storage/img/pages/data4.jpg)"></div>
      </div>
    </div>
  </div>
  <!-- STATIC BLOCK CENTER CONTENT-->
  <div class="container" >
    <div class="row" id="xdbase">
      <div class="col-md-8 col-md-offset-2">
        <div class="text-center">
          <h4><span class="label label-primary">XDBASE</span></h4>
        </div>

        <div class="text-center full">
          <h2 class="oswald">Pusat Data dan Informasi</h2>
          <h5 class="roboto"><i>Sumber Referensi Terpercaya</i></h5>
        </div>
        <br>
        <div class="text-center">
          <div class="btn-group lato" id="menu1">
            <div class="col-xs-12">
              <a href="/penyedia" class="btn btn-default btn-sm"><i class="fa fa-university" aria-hidden="true"></i>&nbsp;|&nbsp;Penyedia &nbsp; <span class="label label-default count1">{{App\Penyedia::all()->count()}}</span></a>
              <a href="/layanan" class="btn btn-default btn-sm"><i class="fa fa-wheelchair-alt" aria-hidden="true"></i>&nbsp;|&nbsp;Layanan
              &nbsp; <span class="label label-default count1">{{App\Layanan::all()->count()}}</span></a>
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-cubes" aria-hidden="true"></i>&nbsp;|&nbsp;Produk</a>
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;|&nbsp;Review</a>
            </div>
          </div>
        </div>
        <br>
        <div class="col-md-10 col-md-offset-1">
          <div class="input-group">
              <div class="input-group-btn search-panel ">
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
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
              <input type="text" class="form-control text-center" name="x" placeholder="...  Cari Disini ...">
              <span class="input-group-btn">
                <button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span></button>
              </span>

            </div>
        </div><!-- /input-group --> <!-- Search BOX -->
        <hr>
        <br>
        <div class="text-center">
          <div class="btn-group lato" id="menu2">
            <div class="col-xs-12">
              <a href="#"  class="btn btn-default btn-sm cool">
                <i class="fa fa-users" aria-hidden="true"></i>&nbsp;|&nbsp; User &nbsp; <span class="label label-primary count1">100</span>
              </a>
              <a href="#"   class="btn btn-default btn-sm cool">
              <i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;|&nbsp; Artikel  &nbsp;<span class="label label-success count2">267</span>
              </a>
              <a href="#list"  class="btn btn-default btn-sm cool">
                <i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;|&nbsp; Komentar &nbsp;<span class="label label-warning count1">123</span>
              </a>
              <a href="#list"   class="btn btn-default btn-sm cool">
                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;|&nbsp; Kunjungan &nbsp; <span class="label label-danger count3">4005</span>
              </a>
            </div>
          </div>
        </div>

        <br>
        <div class="col-md-4 col-md-offset-4 col-xs-10 col-xs-offset-1">
          <p class="text-center">
            <a href="{{url('login')}}" class="btn btn-info btn-md cool btn-block">
              <span>Masuk</span>&nbsp;
              <i class="fa fa-fw fa-sign-in" aria-hidden="true"></i>
            </a>
          </p>
        </div>
    </div>
  </div>
@endsection
@section('navbot')
  <!-- NAV TOP -->
  @include('layouts._navbot')
@endsection

@extends('layouts.main')
@section('title')
  Pusat Informasi dan Data Indonesia
@endsection
@section('css')
@endsection
@section('scripts')
  <script type="text/javascript">
  $(document).ready(function () {
    $('.count').each(function () {
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
    $('#myCarousel').carousel({
     interval: 7000,
     pause: 'none'
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
        <div class="item active " style="background-image:url(../storage/img/bg/data1.jpg)"></div>
        <div class="item " style="background-image:url(../storage/img/bg/data2.jpg"></div>
        <div class="item " style="background-image:url(../storage/img/bg/data3.jpg)"></div>
      </div>
    </div>
  </div>
  <!-- STATIC CONTENT-->
  <div id="content-wrapper">
    <!-- PAGE CONTENT -->
    <div class="container" id="xdbase">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="text-center">
            <h4><span class="label label-primary">XDBASE</span></h4>
          </div>

          <div class="text-center full">
            <h2 class="oswald">Pusat Data dan Informasi Indonesia</h2>
            <h5 class="roboto">Referensi Data Terpercaya</h5>
          </div>
          <hr>
          <div class="hidden-xs">
            <div class="btn-group btn-group-justified cool">
              <a href="/penyedia" class="btn btn-default btn-sm"><i class="fa fa-university" aria-hidden="true"></i>&nbsp;|&nbsp;Penyedia</a>
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-wheelchair-alt" aria-hidden="true"></i>&nbsp;|&nbsp;Layanan</a>
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-cubes" aria-hidden="true"></i>&nbsp;|&nbsp;Produk</a>
              <a href="#" class="btn btn-default btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;|&nbsp;Review</a>
            </div>
          </div>
        <hr>

          <div class="col-md-8 col-md-offset-2 input-group">
            <input type="text" class="form-control text-center input-md" aria-label="Search" placeholder="<<   Cari Disini   >>">
            <div class="input-group-btn">
              <button type="button" class="btn btn-primary btn-md dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true">&nbsp; <label class="searchbox"></label></i>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="#">Tags</a></li>
                <li><a href="#">Berita</a></li>
                <li><a href="#">Data</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Go to Search Page</a></li>
              </ul>
            </div><!-- /btn-group -->
          </div><!-- /input-group --> <!-- Search BOX -->
          <div class="text-center">
            <div class="btn-group lato">
              <br>
              <div class="col-xs-12">
                <a href="#"  class="btn btn-default btn-sm cool">
                  <i class="fa fa-users" aria-hidden="true"></i>&nbsp;|&nbsp; User &nbsp; <span class="label label-primary count">100</span>
                </a>
                <a href="#"   class="btn btn-default btn-sm cool">
                <i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;|&nbsp; Artikel  &nbsp;<span class="label label-success count">267</span>
                </a>
                <a href="#list"  class="btn btn-default btn-sm cool">
                  <i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;|&nbsp; Komentar &nbsp;<span class="label label-warning count">123</span>
                </a>
                <a href="#list"   class="btn btn-default btn-sm cool">
                  <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;|&nbsp; Kunjungan &nbsp; <span class="label label-danger count">4005</span>
                </a>

              </div>
            </div>
          </div>
          <div class="Tombol Masuk">
            <br>
            <br>
            <br>
            <p class="text-center">
              <a href="{{url('login')}}" class="btn btn-primary btn-md cool">
                <span>Masuk</span>&nbsp;
                <i class="fa fa-fw fa-sign-in" aria-hidden="true"></i>
              </a>
            </p>
          </div>
      </div>
      </div>
    </div>
    <!--./ PAGE CONTENT -->
  </div>
</div>
@endsection
@section('navbot')
  <!-- NAV TOP -->
  @include('layouts._navbot')
@endsection

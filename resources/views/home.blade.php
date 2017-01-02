@extends('layouts.main')
@section('title')
  Home
@endsection
@section('css')
  <link rel="stylesheet" href="/css/admin/admin.css">
@endsection
@section('scripts')

@endsection
@section('navtop')
  @include('layouts._navtop')
@endsection
@section('content')
  <br>
  <div class="container">
      <div class="row">
          <div class="col-md-3">
              <div class="panel panel-black">
                  <div class="panel-heading">Artikel</div>
                  <div class="panel-body fixed-panel">
                      @foreach (App\Penyedia::all() as $p )
                        <ul class="fa-ul">
                          <li><i class="fa-li fa fa-check-square"></i>{{$p->fullname  }}</li>
                        </ul>
                      @endforeach
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="panel panel-blue">
                  <div class="panel-heading">Layanan</div>
                  <div class="panel-body fixed-panel">
                      You are logged in!
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="panel panel-purple">
                  <div class="panel-heading">Produk</div>
                  <div class="panel-body fixed-panel">
                      You are logged in!
                  </div>
              </div>
          </div>
          <div class="col-md-3">
              <div class="panel panel-green">
                  <div class="panel-heading">Review</div>
                  <div class="panel-body fixed-panel">
                      You are logged in!
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
@section('navbot')
  @include('layouts._navbot')
@endsection

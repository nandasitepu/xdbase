@extends('layouts.main')
@section('title')
  List Layanan
@endsection
@section('css')
  <style media="screen">
  .btn-glyphicon { padding:8px; background:#ffffff; margin-right:4px; }
  .icon-btn { padding: 1px 15px 3px 2px; border-radius:50px;}
  </style>
@endsection
@section('scripts')


@endsection

@section('navtop')
  @include('layouts._navtop')

@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="abel" id="title">
          <h3>{{  strtoupper(trans($layanan->penyedia->fullname)) }}</h3>
          <hr>
        </div>
        <div class="" id="gambar">
          <img src="{{ asset('storage/img/penyedia/' . $penyedia->image)}}" alt="" class="img-thumbnail" width="250px">
        </div>
        <hr>
        <h4> Summary:</h4>
        <hr>
        Syarat:
        <p>
          {{$layanan->syarat}}
        </p>
        Waktu:
        <p>
          {{$layanan->waktu}}
        </p>
        Biaya:
        <p>
          {{$layanan->biaya}}
        </p>
        Kontak:
        <p>
          {{$layanan->kontak}}
        </p>
        Info
        <p>
          {{$layanan->info}}
        </p>
      </div>
      <div class="col-md-9">
        <div class="abel">
          <h3>Detail : {{  strtoupper(trans($layanan->nama)) }}</h3>

          <div class="pull-right" id="buttons">
            <div class="btn-group">
             	<button class="btn btn-warning btn-sm btn-effect btn-effect5 btn-effect5a"><span class="icon glyphicon glyphicon-floppy-disk"></span><span class="text">Edit</span></button>
                 <button class="btn btn-danger btn-sm btn-effect btn-effect5 btn-effect5a"><span class="icon glyphicon glyphicon-trash"></span><span class="text">Delete</span></button>
                 <button class="btn btn-info btn-sm btn-effect btn-effect5 btn-effect5a"><span class="icon glyphicon glyphicon-share-alt"></span><span class="text">Share</span></button>
             </div>
          </div>
            <hr>
          <div class="detail-layanan lato" style="font-size:14px">
            <p>
              {{$layanan->detail}}

            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>

        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>
@endsection
@section('navbot')
  @include('layouts._navbot')
@endsection

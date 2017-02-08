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
             	<button class="btn btn-warning btn-sm btn-effect btn-effect5 btn-effect5a">
                <a class="icon fa fa-pencil-square-o" style="none" href="{{route('layanan.edit', $layanan->id)}}"></a>
                <span class="text">Edit</span>
              </button>
              <button class="btn btn-danger btn-sm btn-effect btn-effect5 btn-effect5a">
                <span class="icon glyphicon glyphicon-trash"></span>
                <span class="text">Delete</span>
              </button>
               <button class="btn btn-info btn-sm btn-effect btn-effect5 btn-effect5a">
                 <span class="icon glyphicon glyphicon-share-alt"></span>
                 <span class="text">Share</span>
               </button>
             </div>
          </div>
            <hr>
          <div class="detail-layanan lato" style="font-size:14px">
            <div class="text-center">
              <img class="img-responsive img-thumbnail" src="{{ asset('storage/img/layanan/' . $layanan->gambar) }}" width="500px">
            </div>
            <hr>
            <p>
              {!! $layanan->detail !!}

            </p>
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

@extends('layouts.main')

@section('title')
  World Map Chart
@endsection
<!--  Style Sheet -->
@section('css')

@endsection
<!-- Additional Script -->
@section('scripts')
  {!! Charts::assets() !!}
@endsection


@section('navtop')
  @include('layouts._navtop')
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-center">
          <h4>Data CHARTS</h4>
        </div>

      </div>
    </div>
    <div class="row">
       {!! $chart->render() !!}
      <div class="col-md-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"></h3>
          </div>
          <div class="panel-body">

          </div>
          <div class="panel-footer">

          </div>
        </div>
      </div>
      <div class="col-md-10">
        <div class="row">
          <div class="col-md-5">
            <div class="panel panel-default">
              <div class="panel-body">

              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="panel panel-default">
              <div class="panel-body">

              </div>
            </div>
          </div>
          <div class="col-md-2">
            Last
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection

@section('navbot')
  @include('layouts._navbot')
@endsection

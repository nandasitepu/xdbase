@extends('layouts.main')
@section('title')
  Index Tipe Penyedia
@endsection
@section('navtop')
  @include('layouts._navtop')
@endsection
@section('content')
  <div class="container">
    <br>

    <div class="row">
      <h3>  &nbsp; Table Tipe Penyedia</h3>
      <hr>
      <div class="col-md-8">
        <div class="table-responsive">
          <table class="table table-striped table-condensed">
            <thead>
              <tr>
                  <th>ID</th>
                  <th>Tipe Penyedia</th>
                  <th>Created</th>
                  <th>Updated</th>
                  <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tipe as $t)
              <tr>
                <td>{{$t->id}}</td>
                <td>{{$t->fullname}}</td>
                <td><span class="label label-default">{{$t->created_at}}</span></td>
                <td><span class="label label-success">{{$t->updated_at->diffForHumans()}}</span></td>
                <td align="center">
                  <a class="btn btn-default btn-xs"><em class="fa fa-pencil"></em></a>
                  <a class="btn btn-danger btn-xs"><em class="fa fa-trash"></em></a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-4">
        <div class="well">
          <div class="form-group">
            <label for="">Tipe</label>
            <input type="text" class="form-control" id="" placeholder="">
            <button type="button" name="button" class="pull-right">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('navbot')
  @include('layouts._navbot')
@endsection

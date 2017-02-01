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

      <div class="col-md-8">
        <h4 class="abel">&nbsp;Tipe Penyedia</h4>
        <hr>
        <div class="table-responsive">
          <table class="table table-striped table-condensed">
            <thead>
              <tr>
                  <th>ID</th>
                  <th>Tipe Penyedia</th>
                  <th>Created</th>
                  <th>Updated</th>
                  <th></th>
                  <th></th>
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
                <a href ="{{ route('tipe.edit', $t->id) }}" class="btn btn-default btn-xs"><em class="fa fa-pencil"></em></a>
                </td>
                <td>
                  {!! Form::open(['route' => ['tipe.destroy', $t->id],'method' =>'DELETE', 'onsubmit' => "return confirm('Hapus Penyedia?')" ]) !!}
                    <button class=" btn btn-xs btn-danger">
                      <span class="hidden-xs showopacity fa fa-trash-o" type="submit"></span>
                    </button>
                  {!! Form::close() !!}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-4">
        <div class="well">
          {!! Form::open(['route' =>'tipe.store', 'data-parsley-validate' => '']) !!}

          {{ Form::label('fullname', 'Tipe:', ['class' => 'label label-default'])}}
          {{ Form::text('fullname', null, ['class' => ' form-control', 'required' =>''])}}
          {{ Form::submit('Tambah', ['class' => 'pull-right', 'style' =>'margin-top:20px'])}}

          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
@endsection
@section('navbot')
  @include('layouts._navbot')
@endsection

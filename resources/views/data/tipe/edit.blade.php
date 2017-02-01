@extends('layouts.main')
@section('title')
  Index Tipe Penyedia
@endsection
@section('navtop')
  @include('layouts._navtop')
@endsection
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        {!! Form::model($tipe,['route'=>['tipe.update', $tipe->id], 'method' => 'PUT', 'files' => true, 'class' => 'form-group']) !!}
          {{ Form::label('fullname', 'Tipe:', ['class' => 'label label-default'])}}
          {{ Form::text('fullname', null, [
            'class' => ' form-control',
            'data-parsley-trigger' => "change",
            'required' =>'',
            ])
          }}

            {{ Form::submit('Edit Tipe', ['class' => 'btn btn-sm btn-block btn-default', 'style' =>'margin-top:20px'])}}

        {!! Form::close() !!}
      </div>
    </div>

  </div>
@endsection
@section('navbot')
  @include('layouts._navbot')
@endsection

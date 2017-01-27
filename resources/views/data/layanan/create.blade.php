@extends('layouts.main')
@section('title')
  Tambah Layanan
@endsection
@section('scripts')
  <script src="/js/form.js">/* Tiny MCE & Parsley & Select2 */</script>
  <script type="text/javascript"> /* Tiny MCE Config */
    tinymce.init({
      selector: '#detail',
      menubar: false,
    });
  </script>
  <script type="text/javascript"> /* Image Preview Before Upload */
      /* Image Preview Before Upload */
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#img-upload-show').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
          }
      }
      $("#img-upload").change(function(){
          readURL(this);
      });
  </script>
@endsection
@section('css')

@endsection
@section('navtop')
  @include('layouts._navtop')
@endsection


@section('content')
  <div class="container">

    <!-- Form -->

        {!! Form::open(['route'=>'layanan.store', 'data-parsley-validate' => '', 'files'=> true]) !!}
          <div class="row">
            <div class="col-md-6">
              <br>
                {{ Form::label('nama', 'Nama Layanan:', ['class' => 'label label-default'])}}
                {{ Form::text('nama', null, [
                  'class' => ' form-control',
                  'data-parsley-trigger' => "change",
                  'required' =>'',
                  'minlength' => '5'
                  ])
                }}

            </div>
            <div class="col-md-3">
              <br>
                {{ Form::label('slug', 'url:', ['class' => 'label label-default'])}}
                {{ Form::text('slug', null, [
                  'class' => ' form-control',
                  'required' =>'',
                  'minlength' => '1'
                  ])
                }}
            </div>
            <div class="col-md-3">
              <br>
              <div class="form-group">
                {{ Form::label('slug', 'Slug:', ['class' => 'label label-default'])}}
                {{ Form::text('slug', null, [
                  'class' => ' form-control',
                  'required' =>'',
                  'maxlength' => '255'
                  ])
                }}
              </div>
            </div>
          </div>
          <br />
          <div class="row">
            <!-- Gambar -->
            <div class="col-md-6">
              <br>
              <div class="form-group">
                {{ Form::label('gambar', 'Image Layanan:', ['class' => 'label label-default'])}}
                {{ Form::file('gambar', ['class' => 'form-control', 'id'=>'img-upload'])  }}
                <div class="text-center" style="margin:5px">
                  <img src="" id="img-upload-show" width="500px"/>
                </div>
              </div>
            </div>
            <!-- Syarat -->
            <div class="col-md-6">
              <br>
              {{ Form::label('syarat', 'Syarat:', ['class' => 'label label-default'])}}
              {{ Form::textarea('syarat', null, [
                'class' => ' form-control',
                'data-parsley-trigger' => "change",
                'required' =>'',
                'minlength' => '5',
                'rows'=> '3'
                ])
              }}
            </div>
          </div>
          <div class="row">
            <!-- Detail -->
            <div class="col-md-6">
              <br>
              {{ Form::label('detail', 'Detail:', ['class' => 'label label-default'])}}
              {{ Form::textarea('detail', null, [
                'class' => 'form-control',
                'id' => 'detail',
                'data-parsley-trigger' => "change",
                'required' =>'',
                'minlength' => '5',
                'rows'=> '10'
                ])
              }}
            </div>
            <!-- Waktu -->
            <div class="col-md-3">
              <br>
              {{ Form::label('waktu', 'Waktu:', ['class' => 'label label-default'])}}
              {{ Form::textarea('biaya', null, [
                'class' => ' form-control',
                'data-parsley-trigger' => "change",
                'required' =>'',
                'minlength' => '5',
                'rows'=> '2'
                ])
              }}
            </div>
            <!-- Biaya -->
            <div class="col-md-3">
              <br>
              {{ Form::label('biaya', 'Biaya:', ['class' => 'label label-default'])}}
              {{ Form::textarea('biaya', null, [
                'class' => ' form-control',
                'data-parsley-trigger' => "change",
                'required' =>'',
                'minlength' => '5',
                'rows'=> '2'
                ])
              }}
            </div>
            <!-- Kontak -->
            <div class="col-md-6">
              <br>
              {{ Form::label('kontak', 'Kontak:', ['class' => 'label label-default'])}}
              {{ Form::textarea('kontak', null, [
                'class' => ' form-control',
                'data-parsley-trigger' => "change",
                'required' =>'',
                'minlength' => '5',
                'rows'=> '4'
                ])
              }}
            </div>
            <!-- Info Lainnya -->
            <div class="col-md-6">
              <br>
              {{ Form::label('info', 'Info:', ['class' => 'label label-default'])}}
              {{ Form::textarea('info', null, [
                'class' => ' form-control',
                'data-parsley-trigger' => "change",
                'required' =>'',
                'minlength' => '5',
                'rows'=> '4'
                ])
              }}
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              {{ Form::submit('Tambah Penyedia', ['class' => 'btn btn-sm btn-block btn-default', 'style' =>'margin-top:20px'])}}
            </div>
          </div>
        {!! Form::close() !!}



@endsection

@section('navbot')
  <br>
  <br>
  @include('layouts._navbot')
@endsection

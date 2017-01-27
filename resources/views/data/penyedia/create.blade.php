@extends('layouts.main')
@section('title')
  Tambah Penyedia Data
@endsection
@section('css')

@endsection
@section('scripts')
  <script src="/js/data/penyedia.js"></script>
  <script src="/js/form.js">/* Tiny MCE & Parsley & Select2 */</script>
  <script type="text/javascript"> /* Tiny MCE Config */
    tinymce.init({
      selector: '#deskripsi',
      menubar: false,
      plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code'
      ],
      toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
      content_css: '//www.tinymce.com/css/codepen.min.css'
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

@section('content')
  @include('layouts._navtop')
    <div class="container" style="padding-bottom:100px">
      <div class="row">
        <div class="col-md-12">
          <h3><span class="label label-default">Tambah Penyedia</span></h3>
          @include('layouts._message')
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-body">
              {!! Form::open(['route'=>'penyedia.store', 'data-parsley-validate' => '', 'files'=> true]) !!}
              <div class="row">
                <div class="col-md-6">
                    {{ Form::label('fullname', 'Nama Penyedia:', ['class' => 'label label-default'])}}
                    {{ Form::text('fullname', null, [
                      'class' => ' form-control',
                      'data-parsley-trigger' => "change",
                      'required' =>'',
                      'minlength' => '5'
                      ])
                    }}

                </div>
                <div class="col-md-3">
                    {{ Form::label('shortname', 'Short:', ['class' => 'label label-default'])}}
                    {{ Form::text('shortname', null, [
                      'class' => ' form-control',
                      'required' =>'',
                      'minlength' => '1',
                      'maxlength' => '20'
                      ])
                    }}
                </div>
                <div class="col-md-3">
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
                <div class="col-md-6">
                  <div class="form-group">
                    {{ Form::label('desc', 'Deskripsi:', ['class' => 'label label-default'])}}
                    {{ Form::textarea('desc', null, [
                      'class' => 'form-control',
                      'rows'=> '10',
                      'required' =>'',
                      'minlength' => '20',
                      'id' => 'deskripsi'
                      ])
                    }}
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    {{ Form::label('image', 'Image Penyedia:', ['class' => 'label label-default'])}}
                    {{ Form::file('image', ['class' => 'form-control', 'id'=>'img-upload'])  }}
                    <div class="text-center" style="margin:5px">
                      <img src="" id="img-upload-show" width="200px"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    {{ Form::label('tipe', 'Tipe:', ['class' => 'label label-default'])}}
                    <select class="form-control" name="tipe_id">
                      @foreach ($tipe as $t )
                        <option value="{{ $t->id }}">{{ $t->fullname }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    {{ Form::label('contact', 'Kontak:', ['class' => 'label label-default'])}}
                    {{ Form::textarea('contact', null, [
                      'class' => ' form-control',
                      'required' =>'',
                      'rows' => '5'
                      ])
                    }}
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  {{ Form::submit('Tambah Penyedia', ['class' => 'btn btn-sm btn-block btn-default', 'style' =>'margin-top:20px'])}}
                </div>
              </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  @include('layouts._navbot')
@endsection

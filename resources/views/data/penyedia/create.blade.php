@extends('layouts.main')
@section('title')
  Tambah Penyedia Data
@endsection
@section('css')

@endsection
@section('scripts')
  <script src="/js/data/penyedia.js"></script>
  <script src="/js/editor.js"></script>
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
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3><span class="label label-default">Tambah Penyedia</span></h3>
          @include('layouts._message')

          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fullname" class="label label-default">Nama Penyedia:</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Penyedia">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="shortname" class="label label-default">Short:</label>
                    <input type="text" class="form-control" id="short" placeholder="Penyedia">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="shortname" class="label label-default">Slug:</label>
                    <input type="text" class="form-control" id="slug" placeholder="Slug">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="desc" class="label label-default">Deskripsi:</label>
                    <textarea class="form-control" id="deskripsi" name="desc" rows="10"></textarea>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="label label-default">Image Penyedia: </label>
                    <input type="file" name="image" id="img-upload" class="form-control">
                    <div class="text-center" style="margin:5px">
                      <img src="" id="img-upload-show" width="200px"/>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="desc" class="label label-default">Tipe:</label>
                    <input type="text" class="form-control" id="tipe" placeholder="Slug">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="desc" class="label label-default">Kontak:</label>
                    <textarea class="form-control" id="contact" name="contact" rows="5"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button type="button" class="btn btn-primary btn-block" name="button">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @include('layouts._navbot')
@endsection

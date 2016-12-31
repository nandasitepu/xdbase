@extends('layouts.main')
@section('title')
  Tambah Penyedia Data
@endsection
@section('css')

@endsection
@section('scripts')
  <script src="/js/data/penyedia.js"></script>
  <script src="/js/editor.js"></script>
  <script type="text/javascript">
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
@endsection

@section('content')
  @include('layouts._navtop')
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3><span class="label label-default">Tambah Penyedia</span></h3>
          <hr>
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fullname">Nama Penyedia:</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Penyedia">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="shortname">Short:</label>
                    <input type="text" class="form-control" id="short" placeholder="Penyedia">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="shortname">Slug:</label>
                    <input type="text" class="form-control" id="slug" placeholder="Slug">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="desc">Deskripsi:</label>
                    <textarea class="form-control" id="deskripsi" name="desc" rows="10"></textarea>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="image_path">Upload Image:</label>
                    <input type="file" name="image_path" class="form-control"  />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="desc">Tipe:</label>
                    <input type="text" class="form-control" id="tipe" placeholder="Slug">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="desc">Kontak:</label>
                    <textarea class="form-control" id="contact" name="contact" rows="6"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @include('layouts._navbot')
@endsection

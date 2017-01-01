@foreach ($penyedia as $p)
  <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 portfolio-item" >
    <a href="#">
      <img class="img-responsive img-thumbnail" src="{{ $p->image_path }}" alt="">
    </a>
    <div class="btn btn-block btn-sm btn-default">
      {{ $p->shortname }} <br>
      <small>{{ $p->updated_at }}</small>
    </div>
  </div>

@endforeach

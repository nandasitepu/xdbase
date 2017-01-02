@foreach ($penyedia as $p)
  <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 portfolio-item">
    <a href="{{route('penyedia.show', $p->id) }}">
      <img class="img-responsive img-thumbnail" src="{{ asset('storage/img/penyedia/' . $p->image) }}" alt="">
    </a>
    <div class="btn btn-block btn-sm btn-default">
      {{ $p->shortname }} <br>
      <small>{{ $p->updated_at->diffForHumans() }}</small>
    </div>
  </div>
@endforeach

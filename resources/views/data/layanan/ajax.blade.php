@foreach ($layanan as $l)
  <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 portfolio-item">

    <div style="position: relative; display: inline">
      <img src="{{ asset('storage/img/penyedia/' . $l->penyedia->image) }}" width="28px" alt="user profile image"
      class="img-rounded" style=" z-index:1; position: absolute;right:0;top:20%"> &nbsp;
      <a href="{{route('layanan.show', $l->id)}}"><img class="img-responsive img-thumbnail" src="{{ asset('storage/img/layanan/data.jpg') }}" alt=""></a>
    </div>

    <button type="button" class="btn btn-default btn-block">

      <b class="abel"> {{ $l->nama }} </b> <br>


      <small class="label label-default lato">{{ $l->updated_at->diffForHumans() }}</small>
    </button>

  </div>
@endforeach

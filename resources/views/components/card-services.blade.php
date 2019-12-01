
  <div class="card-services shadow">
    <div class="service-image" style="background-image: url('{{ $data->featured_image }}')">
    </div>
    <div class="card-body bg-white">
      <h5 class="text-danger">{{ $data->title }}</h5>
      {!! $data->content !!}
      <a class="btn btn-outline-danger mt-5 mb-3" href="{{ $data->link_url }}">Learn more</a>
    </div>
  </div>

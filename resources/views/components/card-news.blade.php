
  <div class="card-news shadow">
    <div class="news-image" style="background-image: url('{{ $data->featured_image }}')"></div>
    <div class="card-body pr-md-3 bg-white">
      <p class="font-weight-bold text-info">{{ $data->date }}</p>
      <h5 class="text-danger mb-3">{{ $data->title }}</h5>
      {!! $data->content !!}
      <a class="btn btn-sm btn-outline-danger" href="#">Read more</a>
    </div>
  </div>
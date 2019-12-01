
<div class="card-event shadow">
  <a href="{{ $data->event_link }}">
    <div class="event-image" style="background-image: url('{{ $data->featured_image }}')"></div>
    <div class="card-body pr-md-3 bg-white {{ $data->event_type }}">
      <small class="font-weight-bold">{{ $data->date }}</small>
      <h5 class="mb-3">{{ $data->title }}</h5>
      {!! $data->content !!}
      <p class="state-title font-weight-bold">{{ $data->state }}</p>
    </div>
  </a>
</div>
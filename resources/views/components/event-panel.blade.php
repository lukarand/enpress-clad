<div class="event-panel">
  <div class="panel-image" style="background-image: url('{{ $data->featured_image }}')"></div>
  <div class="event-content">
    <div class="category-type {{ $data->category_type }}">
      {{ $data->category_title }}
    </div>
    <div class="row">
      <div class="col-md-8 event-left-content pr-0 pr-md-7">
        <h4 class="event-title h5 h4-md">{{ $data->title }}</h4>
        {!! $data->content !!}
      <div class="d-none d-md-flex">
        <button type="button" class="btn btn-outline-danger btn-sm mt-4 mb-4" data-toggle="modal" data-target=".modal-booking">Book now</button>
      </div>
      </div>
      <div class="col-md-4">
        <div class="event-right-content border-left-secondary pl-7">
          <div>
            <label>Date</label>
            <p>{{ $data->event_date }}</p>
          </div>
          <div>
            <label>Time</label>
            <p>{{ $data->event_time }}</p>
          </div>
          <div>
            <label>Location1</label>
            <p>{{ $data->event_location1 }}</p>
          </div>
          <div>
            <label>Location2</label>
            <p>{{ $data->event_location2 }}</p>
          </div>
          <div>
            <label>Min / Max Participants</label>
            <p>{{ $data->min_max }}</p>
          </div>
          <div>
            <label>Cost</label>
            <p>{{ $data->event_cost }}</p>
          </div>
          <div>
            <p class="font-size-sm">{{ $data->event_inclusions }}</p>
          </div>
        </div>
        <div class="d-flex d-md-none">
          <button type="button" class="btn btn-outline-danger btn-sm mt-4 mb-4" data-toggle="modal" data-target=".modal-booking">Book now</button>
        </div>
      </div>
    </div>
  </div>
</div>
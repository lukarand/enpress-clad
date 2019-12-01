<div class="service-panel py-4 py-md-7" id="{{ $data->panel_id }}">
  <div class="featured-image" style="background-image: url('{{ $data->featured_image }}')"></div>
  <div class="panel-content">
    <h4 class="panel-title pt-5">{{ $data->title }}</h4>
    <div class="row">
      <div class="col-md-7 panel-text pr-0 pr-md-7">
        {!! $data->content !!}
      <div class="d-none d-md-flex">
        <a href="/contact/#contact" class="btn btn-outline-danger btn-sm mt-4 mb-4">Get in touch</a>
      </div>
      </div>
      <div class="col-md-5">
        <div class="panel-right border-left-secondary pl-7">
          <h5 class="text-info font-weight-medium mb-4">{{ $data->category_title }}</h5>
          {!! $data->category !!}
        </div>
        <div class="d-flex d-md-none">
          <a href="/contact/#contact" class="btn btn-outline-danger btn-sm mt-4 mb-4">Get in touch</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section section-hero d-flex justify-content-center align-items-center"
  style="height: {{ $data->hero_height }};">
  <div class="container">
    <div class="text-center pt-14">
      <h1 class="mb-3 h3 h1-md" @if (isset($data->title_width)) style="max-width: {{ $data->title_width }};" @endif>{{ $data->title }}</h1>
      @if (isset($data->content))
        <p class="mx-auto">{{ $data->content }}</p>
      @endif
    </div>
  </div>
</div>
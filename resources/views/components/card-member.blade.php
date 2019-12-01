
<div class="card-member shadow">
  <div class="member-image w-100" style="background-image: url('{{ $data->photo }}')"></div>
  <div class="card-body bg-white">
    <h5 class="text-danger">{{ $data->name }}</h5>
    <p class="font-weight-bold text-info">{{ $data->position }}</p>
    {!! $data->content !!}
  </div>
</div>
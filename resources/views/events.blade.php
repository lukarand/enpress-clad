@extends ('layouts.app')
@section ('content')
  @include ('sections.other-hero', [
    'data' => (object)([
        'hero_height' => '450px',
        'title_width' => '440px',
        'title' => 'Event & Course Calendar'
    ])
  ])
  @include ('sections.event-search')
@endsection
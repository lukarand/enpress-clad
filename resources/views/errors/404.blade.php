@extends ('layouts.app')
@section ('content')
@include ('sections.other-hero', [
  'data' => (object)([
    'hero_height' => '546px',
    'title' => '404 Not Found',
    'content' => 'The page you are looking for doesn’t exist, sorry for the inconvenience.'
  ])
])
@endsection
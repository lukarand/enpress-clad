@extends ('layouts.app')
@section ('content')
  @include ('sections.other-hero', [
    'data' => (object)([
      'hero_height' => '450px',
      'title' => 'Contact'
    ])
  ])
  @include ('sections.contact')
@endsection
@extends ('layouts.app')
@section ('content')
  @include ('sections.other-hero', [
    'data' => (object)([
      'hero_height' => '546px',
      'title' => 'Nationally Recognised Training',
      'content' => 'Collective Learning and Development offers a wide range of courses to clients.  These courses have been developed through years of consultation with clients and industry bodies.  Our courses are designed to provide ongoing development to leaders of all levels.'
    ])
  ])
  @include ('sections.training-tabs')
  @include ('sections.training')
@endsection
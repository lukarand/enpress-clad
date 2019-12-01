@extends ('layouts.app')
@section ('content')
  @include ('sections.other-hero', [
    'data' => (object)([
      'hero_height' => '546px',
      'title' => 'Professional Services',
      'content' => 'Professional Services are designed to provide ongoing development to leaders of all levels.  Collective Learning and Development have an abundance of training on offer which can be tailored to suit the leadership cohort and needs of your business.'
    ])
  ])
  @include ('sections.services-tabs')
  @include ('sections.services')
@endsection
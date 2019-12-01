<div class="py-8">
  <div class="container">
    <div class="header-text text-center mx-auto mb-4 mb-md-9">
      <h4>About us</h4>
      <p>Collective Learning and Development provides our clients with learning solutions, such as;</p>
    </div>
    <div class="d-flex justify-content-between flex-wrap px-md-12 px-0">
      @include ('components.icon-pack', [
        'data' => (object)([
          'icon_url' => asset('dist/media/svg/icon-group.svg'),
          'icon_text' => 'Face to Face Workshops'
        ])
      ])
      @include ('components.icon-pack', [
        'data' => (object)([
          'icon_url' => asset('dist/media/svg/icon-desk.svg'),
          'icon_text' => 'eLearning'
        ])
      ])
      @include ('components.icon-pack', [
        'data' => (object)([
          'icon_url' => asset('dist/media/svg/icon-computer.svg'),
          'icon_text' => 'PowerPoint Materials'
        ])
      ])
      @include ('components.icon-pack', [
        'data' => (object)([
          'icon_url' => asset('dist/media/svg/icon-present.svg'),
          'icon_text' => 'Train the Trainer Suite'
        ]) 
      ])
    </div>
    <div class="text-center">
      <a class="btn btn-outline-danger btn-lg font-size-base mt-7" href="/about">Learn more about us</a>
    </div>
  </div>
</div>
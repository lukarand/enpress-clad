<div class="pt-6 pt-md-9">
  <div class="container">
    <div class="header-text text-center mx-auto mb-7 mb-md-9">
      <h4>Our services</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tristique odio ut iaculis condimentum. Vivamus nec pharetra arcu. Ut eget varius tellus.</p>
    </div>
    <div class="row">
      <div class="col-lg-6 mb-4 d-flex pr-lg-2">
        @include ('components.card-services', [
          'data' => (object)([
            'featured_image' => asset('dist/media/course-images/professional-services.jpg'),
            'title' => 'Professional Services',
            'link_url' => '/professional-services',
            'content' => '<p>Collective Learning and Development specialise in the delivery of many different face to face workshops.<br>Whether it is existing training you are looking for, or bespoke workshops, Collective Learning and Development can discuss the learning needs for your organisation.</p>'
          ])
        ])
      </div>
      <div class="col-lg-6 mb-4 d-flex pr-lg-2">
        @include ('components.card-services', [
          'data' => (object)([
            'featured_image' => asset('dist/media/course-images/nationally-recognised-training.jpg'),
            'title' => 'Nationally Recognised Training',
            'link_url' => '/nationally-recognised-training',
            'content' => '<p>Collective Learning and Development is accredited to deliver, assess and certify students for nationally recognised training in the following qualifications;</p>
                          <p>•  FNS30415 Certificate III in Mercantile Agents</p>
                          <p>•  FNS30115 Certificate III in Financial Services</p>'
          ])
        ])
      </div>
    </div>
  </div>
</div>
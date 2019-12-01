<div class="section section-contact py-6 py-md-9" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 contact-info">
        <h5 class="py-md-3 mt-4">Contact information</h5>
        <p class="py-3 py-md-5 mr-md-4">If you would like Collective Learning and Development to conduct a free training needs analysis, or you would like more information relating to our training packages, please contact us.</p>
        <ul class="pl-0">
          <li class="d-flex align-items-center mb-4">
            @include ('shared.svgs.icon-phone', ['class' => 'svg-icon svg-icon-danger svg-icon-size-lg'])
            <h6>Laura.Herman@collectionhouse.com.au</h6>
          </li>
          <li class="d-flex align-items-center mb-4">
            @include ('shared.svgs.icon-email', ['class' => 'svg-icon svg-icon-danger svg-icon-size-lg'])
            <h6>1300 367 370</h6>
          </li>  
        </ul>
      </div>
      <div class="col-lg-6">
        <div class="card-contact shadow bg-white">
          {!! do_shortcode('[ninja_form id=1]') !!}
        </div>
      </div>
    </div>
  </div>
</div>
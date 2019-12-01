<div class="section-event-search">
  <div class="container">
    <div class="row py-5 pt-md-7 pb-md-6">
      <div class="col-md-6">
        <div class="event-daterange">
          <label>Date range</label>
          <input type="text" name="daterange" class="form-control" id="daterange" />
          @include ('shared.svgs.icon-calendar', ['class' => 'svg-icon svg-icon-danger'])
        </div>
      </div>
      <div class="col-md-3">
        <div class="location-state">
          <label>Location by state</label>
          <select name="state" class="form-control" id="state">
            <option>All locations</option>
            <option>ACT</option>
            <option>NSW</option>
            <option>NT</option>
            <option>QLD</option>
            <option>SA</option>
            <option>TAS</option>
            <option>VIC</option>
            <option>WA</option>
          </select>
        </div>
      </div>
      <div class="col-md-3 pr-md-2">
        <div class="event-type">
          <label>Event Type</label>
          <select name="event-type" class="form-control" id="event-type">
            <option>All types</option>
            <option>Workshop</option>
            <option>Event</option>
            <option>Course</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4 d-flex pr-md-2">
        @include ('components.card-event', [
          'data' => (object)([
            'event_link' => './event-detail/event-1',
            'featured_image' => asset('dist/media/course-images/event-image-1.png'),
            'date' => 'Wed, 6 July 2018',
            'title' => 'Local Government Collections Workshop',
            'event_type' => 'category-workshops',
            'content' => '<p>Aimed to provide Rates, Revenue and Recovery Officers with the most effective skills and techniques to overdue account conversations.</p>',
            'state' => 'Brisbane CBD'
          ])
        ])
      </div>
      <div class="col-md-6 col-lg-4 mb-4 d-flex pr-md-2">
        @include ('components.card-event', [
          'data' => (object)([
            'event_link' => './event-detail/event-2',
            'featured_image' => asset('dist/media/course-images/event-image-2.png'),
            'date' => 'Thu, 16 July 2018',
            'title' => 'Dealing with Difficult Customers - Collections ',
            'event_type' => 'category-events',
            'content' => '<p>What situations affect our customers?  How does this affect our ability to collect overdue payments and arrears?</p>',
            'state' => 'Brisbane CBD'
          ])
        ])
      </div>
      <div class="col-md-6 col-lg-4 mb-4 d-flex pr-md-2">
        @include ('components.card-event', [
          'data' => (object)([
            'event_link' => './event-detail/event-3',
            'featured_image' => asset('dist/media/course-images/event-image-3.png'),
            'date' => 'Fri, 20 July 2018',
            'title' => 'Local Government Collections Workshop',
            'event_type' => 'category-courses',
            'content' => '<p>Aimed to provide Rates, Revenue and Recovery Officers with the most effective skills and techniques to overdue account conversations.</p>',
            'state' => 'Sunshine Coast'
          ])
        ])
      </div>
    </div>
  </div>
</div>
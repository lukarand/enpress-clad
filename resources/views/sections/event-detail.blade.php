@php
  $path = Request::getPathInfo();
@endphp
<div class="section-event-detail">
  <div class="container">
    @if (strrpos($path, '/event-detail/event-2') === 0 ) 
      @include ('components.event-panel', [
        'data' => (object)([
          'featured_image' => asset('dist/media/course-images/event-image-2.png'),
          'category_title' => 'Workshop',
          'category_type' => 'category-workshop',
          'title' => 'Dealing with Difficult Customers - Collections',
          'content' => '<p>What situations affect our customers?  How does this affect our ability to collect overdue payments and arrears?</p>
                          <p>This workhop takes Customer Service and Account Representatives through challenges that our customers may face , how to identify triggers and stages of escalating agression and how to positively recognise and respond to a customer to descalate a situation that can result in the best solutions.</p>',
          'event_date' => '6th February 2019',
          'event_time' => '9am - 4pm',
          'event_location1' => 'Brisbane CBD',
          'event_location2' => 'Newstead - Collection House Level 12/ 100 Skyring Terrace Newstead QLD 4006',
          'min_max' => '6 – 40 pax capacity',
          'event_cost' => '$350 per person (+GST)',
          'event_inclusions' => 'Morning Tea, Lunch, Afternoon Tea Provided. Workshop Materials Provided'
        ])
      ])
    @endif
    @if (strrpos($path, '/event-detail/event-1') === 0 ) 
      @include ('components.event-panel', [
        'data' => (object)([
          'featured_image' => asset('dist/media/course-images/event-image-1.png'),
          'category_title' => 'Event',
          'category_type' => 'category-event',
          'title' => 'Local Government Collections Workshop',
          'content' => '<p>Aimed to provide Rates, Revenue and Recovery Officers with the most effective skills and techniques to overdue account conversations.</p>',
          'event_date' => '6th July 2018',
          'event_time' => '9am - 4pm',
          'event_location1' => 'Brisbane CBD',
          'event_location2' => 'Newstead - Collection House Level 12/ 100 Skyring Terrace Newstead QLD 4006',
          'min_max' => '6 – 40 pax capacity',
          'event_cost' => '$350 per person (+GST)',
          'event_inclusions' => 'Morning Tea, Lunch, Afternoon Tea Provided. Workshop Materials Provided'
        ])
      ])
    @endif
    @if (strrpos($path, '/event-detail/event-3') === 0 ) 
      @include ('components.event-panel', [
        'data' => (object)([
          'featured_image' => asset('dist/media/course-images/event-image-3.png'),
          'category_title' => 'Course',
          'category_type' => 'category-course',
          'title' => 'Local Government Collections Workshop',
          'content' => '<p>Aimed to provide Rates, Revenue and Recovery Officers with the most effective skills and techniques to overdue account conversations.</p>',
          'event_date' => '6th July 2018',
          'event_time' => '9am - 4pm',
          'event_location1' => 'Brisbane CBD',
          'event_location2' => 'Newstead - Collection House Level 12/ 100 Skyring Terrace Newstead QLD 4006',
          'min_max' => '6 – 40 pax capacity',
          'event_cost' => '$350 per person (+GST)',
          'event_inclusions' => 'Morning Tea, Lunch, Afternoon Tea Provided. Workshop Materials Provided'
        ])
      ])
    @endif
    <div class="upcoming-events">
      <h4 class="font-weight-bold mb-4">Other upcoming events</h4>
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 d-flex pr-md-2">
          @include ('components.card-event', [
            'data' => (object)([
              'event_link' => 'event-1',
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
              'event_link' => 'event-2',
              'featured_image' => asset('dist/media/course-images/event-image-2.png'),
              'date' => 'Thu, 16 July 2018',
              'title' => 'Dealing with Difficult Customers - Collections ',
              'event_type' => 'category-workshops',
              'content' => '<p>What situations affect our customers?  How does this affect our ability to collect overdue payments and arrears?</p>',
              'state' => 'Brisbane CBD'
            ])
          ])
        </div>
        <div class="col-md-6 col-lg-4 mb-4 d-flex pr-md-2">
          @include ('components.card-event', [
            'data' => (object)([
              'event_link' => 'event-3',
              'featured_image' => asset('dist/media/course-images/event-image-3.png'),
              'date' => 'Fri, 20 July 2018',
              'title' => 'Local Government Collections Workshop',
              'event_type' => 'category-workshops',
              'content' => '<p>Aimed to provide Rates, Revenue and Recovery Officers with the most effective skills and techniques to overdue account conversations.</p>',
              'state' => 'Sunshine Coast'
            ])
          ])
        </div>
      </div>
    </div>
    <div class="modal-booking modal fade" id="modal-booking" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <div></div>
              <div></div>
            </button>
            <h4 class="font-weight-bold mb-5">Book now</h4>
            <form>
              <div class="form-group">
                <label for="event-name">Event name</label>
                <input type="text" name="event-name" class="form-control" />
              </div>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" />
              </div>
              <div class="form-group">
                <label for="contact">Contact Number</label>
                <input type="phone" name="contact" class="form-control" />
              </div>
              <div class="form-group">
                <label for="attendees">Number of attendees</label>
                <input type="text" name="attendees" class="form-control" />
              </div>
              <div class="form-group mt-5">
                <button type="submit" class="btn btn-outline-danger d-inline-block">
                  Submit booking
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
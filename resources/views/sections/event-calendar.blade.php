<div class="section">
  @include ('sections.now-call')
  <div class="section-calendar py-8 py-md-12">
    <div class="container">
      <div class="section-header">
        <h4 class="d-block mb-5 mb-md-0 mr-3">Event &amp; course calendar</h4>
        <a class="btn btn-outline-danger" href="/events">See all events</a>
      </div>
      <app-event-calendar class="event-calendar">
        <div class="event-calendar-main">
          <div class="event-calendar-heading">
            <div class="title"></div>
            <div class="control">
              <div class="prev"></div>
              <div class="next"></div>
            </div>
          </div>
          <div class="event-calendar-table">
          </div>
        </div>
        <div class="event-calendar-content">
        </div>
        <div class="event-calendar-loading">
        </div>
      </app-event-calendar>
    </div>
  </div>
</div>
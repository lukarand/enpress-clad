<div class="pt-5 pt-md-11 pb-6 pb-md-14">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-4 d-flex pr-md-2">
        @include ('components.card-member', [
          'data' => (object)([
            'photo' => asset('dist/media/people/laura.jpg'),
            'name' => 'Laura Herman',
            'position' => 'Collective Learning and Development Manager',
            'content' => '<p>Leading Collective Learning and Development, Laura Herman is a skilled consultant, facilitator, designer and coach with extensive experience in the Learning & Development, Financial Services, Retail and Customer Service Industries.</p>
                              <p>Laura is a Qualified Certificate IV Trainer – TAE40110 with TAELLN411 accreditation</p>
                              <p class="mb-0">LSI TM Accredited Practitioner</p>
                              <p class="mb-0">DiSC TM Accredited Practitioner</p>
                              <p class="mb-0">5 Behaviours of a Cohesive Team </p>
                              <p class="mb-0">(DiSC TM) Accredited Practitioner</p>'
          ])
        ])
      </div>
      <div class="col-lg-6 mb-4 d-flex pr-md-2">
        @include ('components.card-member', [
          'data' => (object)([
            'photo' => asset('dist/media/people/anthony.jpg'),
            'name' => 'Anthony Rivas',
            'position' => 'Managing Director and CEO',
            'content' => '<p>Mr. Anthony Rivas comes to Collection House Limited with over 25 years’ experience in the area of Credit and Collections, and extensive international experience in three continents. Anthony has served as Managing Director of Australian Receivables Limited since July 2015, after joining the company in 2013 to oversee operations and then being promoted when the Founder and CEO retired.</p>
                          <p>His accomplishments included: ‘ Assisting companies to bring purchased debt portfolios to India for the first time ‘ Vice President of Operations/Training for Global Vantedge (an OSI company) in the USA and India.</p>'
          ])
        ])
      </div>
    </div>
  </div>
</div>
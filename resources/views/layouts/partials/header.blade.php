@php
  $path = Request::path();
@endphp
<div class="site-header">
  <nav class="navbar navbar-nav-top d-none d-lg-block p-0">
    <ul class="navbar-nav flex-row float-right">
      <li class="bg-warning text-center px-3 py-2">
        <a href="#" class="font-size-sm font-weight-medium" target="_blank">Student Enrolment Form</a>
      </li>
      <li class="bg-primary text-center px-3 py-2">
        <a href="https://chief.collectivelearning.com.au/login" class="font-size-sm font-weight-bold" target="_blank">Student Login</a>
      </li>
      <li class="bg-danger text-center px-3 py-2">
        <a href="https://chief.collectivelearning.com.au/login" class="font-size-sm text-white font-weight-bold" target="_blank">Staff Login</a>
      </li>
    </ul>
  </nav>
  <nav class="navbar-main navbar navbar-expand-lg fixed-top mr-lg-4">
    <div class="navbar-heading">
      <a class="navbar-brand mr-auto" href="/">
        <img src="{{ asset('/dist/media/logos/clad-logo.png') }}" class=""/>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_main" aria-controls="navbar_main" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar_main">
      <div class="d-lg-none d-flex">
        <div class="w-50 bg-primary text-center px-3 py-2">
          <a href="https://chief.collectivelearning.com.au/login" class="font-size-sm font-weight-bold" target="_blank">Student Login</a>
        </div>
        <div class="w-50 bg-danger text-center px-3 py-2">
          <a href="https://chief.collectivelearning.com.au/login" class="font-size-sm text-white font-weight-bold" target="_blank">Staff Login</a>
        </div>
      </div>
      <ul class="navbar-nav ml-auto">
        <li @if (strrpos($path, '/') === 0) id="active-menu" class="nav-item" @endif>
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item" @if (strrpos($path, 'professional-services') === 0) id="active-menu" class="nav-item" @endif>
          <a class="nav-link" href="/professional-services">Professional Services</a>
        </li>
        <li class="nav-item" @if (strrpos($path, 'nationally-recognised-training') === 0) id="active-menu" class="nav-item" @endif>
          <a class="nav-link" href="/nationally-recognised-training">Nationally Recognised Training</a>
        </li>
        <li class="nav-item has-submenu" @if (strrpos($path, 'about') === 0) id="active-menu" class="nav-item" @endif>
          <a class="nav-link nav-link-lg" href="/about">About</a>
          <ul class="nav-submenu">
            <li @if (strrpos($path, 'about/our-apporach') === 0) id="active-menu" class="nav-item" @endif>
              <a class="nav-sublink" href="../about/our-approach ">Our Approach</a>
            </li>
            <li @if (strrpos($path, 'about/our-team') === 0) id="active-menu" class="nav-item" @endif>
              <a class="nav-sublink" href="../about/our-team">Our Team</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" @if (strrpos($path, 'news') === 0) id="active-menu" class="nav-item" @endif>
          <a class="nav-link" href="/news">News</a>
        </li>
        <li class="nav-item" @if (strrpos($path, 'contact') === 0) id="active-menu" class="nav-item" @endif>
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
      <div class="bg-warning d-block d-lg-none text-center px-3 py-2">
        <a href="#" class="font-size-sm font-weight-bold">Student Enrolment Form</a>
      </div>
    </div>
  </nav>
</div>
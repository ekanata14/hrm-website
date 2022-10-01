<div class="container-fluid bg-blue mt-5" style="height: 250px">
    <div class="container d-flex align-items-center justify-content-center h-100 text-white">
        <a class="navbar-brand mx-3" href="/"><img src="/images/hrm-logo.png" alt="hrm-logo" height="150"></a>
        <ul class="navbar-nav mx-3">
            <h5>Navigation</h5>
            <li class="nav-item mx-3 fs-6 fw-bold text-uppercase">
              <a class="nav-link {{ Request::is('/') ? 'active border-bottom-nav pb-1' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item mx-3 fs-6  fw-bold text-uppercase">
              <a class="nav-link {{ Request::is('blogs') ? 'active border-bottom-nav pb-1' : '' }}" href="/blogs">Blogs</a>
            </li>
            <li class="nav-item mx-3 fs-6  fw-bold text-uppercase">
              <a class="nav-link {{ Request::is('events') ? 'active border-bottom-nav pb-1' : '' }}" href="/events">Events</a>
            </li>
            <li class="nav-item mx-3 fs-6  fw-bold text-uppercase">
              <a class="nav-link {{ Request::is('about') ? 'active border-bottom-nav pb-1' : '' }}" href="/about">About Us</a>
            </li>
          </ul>
          <ul class="navbar-nav mx-3">
            <h5>Blog Categories</h5>
            <li class="nav-item mx-3 fs-6 fw-bold text-uppercase">
              <a class="nav-link {{ Request::is('/') ? 'active border-bottom-nav pb-1' : '' }}" href="/">Mosque Events</a>
            </li>
            <li class="nav-item mx-3 fs-6  fw-bold text-uppercase">
              <a class="nav-link {{ Request::is('blogs') ? 'active border-bottom-nav pb-1' : '' }}" href="/blogs">Tips and Tricks</a>
            </li>
            <li class="nav-item mx-3 fs-6  fw-bold text-uppercase">
              <a class="nav-link {{ Request::is('events') ? 'active border-bottom-nav pb-1' : '' }}" href="/events">Denpasar News</a>
            </li>
            <li class="nav-item mx-3 fs-6  fw-bold text-uppercase">
              <a class="nav-link {{ Request::is('about') ? 'active border-bottom-nav pb-1' : '' }}" href="/about">Sanur News</a>
            </li>
          </ul>
          <ul class="navbar-nav mx-3">
            <h5>Follow Us</h5>
            <li class="nav-item mx-3 fs-6 fw-bold text-uppercase">
              <a class="nav-link {{ Request::is('/') ? 'active border-bottom-nav pb-1' : '' }}" href="/"><img src="/images/instagram.png" alt="instagram-image" height="50"></a>
            </li>
          </ul>
    </div>
</div>
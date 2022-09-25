<nav class="navbar navbar-expand-lg bg-transparent">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="images/hrm-logo.png" alt="hrm-logo" height="100"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse d-lg-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
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
      </div>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark {{ Request::is('profile') ?  'active border-bottom-nav pb-1' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome Back, User
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/profile"><i class="bi bi-layout-text-sidebar-reverse"></i> Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                    <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                </li>
            </ul>
          </li>
        {{-- <li class="nav-item"><a href="/login" class="text-white text-decoration-none nav-link {{ ($active === 'categories') ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a></li> --}}
    </ul>
    </div>
  </div>
    </div>
  </nav>
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/dashboard') ? 'active border-bottom-nav pb-1' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/dashboard/blogs*') ? 'active border-bottom-nav pb-1' : '' }}" href="/dashboard/blog">
            <span data-feather="file" class="align-text-bottom"></span>
            Blogs
          </a>
        </li>
      </ul>
    </div>
  </nav>
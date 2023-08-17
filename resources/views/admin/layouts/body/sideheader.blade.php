
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-white" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="dashboard.html" target="_blank">
        <img src="{{ asset('backend/assets/img/logo-ct.png') }}" class="navbar-brand-img h-100 text-dark" alt="main_logo">
        <span class="ms-1 font-weight-bold text-dark">Plant Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav ">
        <li class="nav-item ">
          <a class="nav-link text-white active" style="background-color: #17A2B8;"  href="{{ url('dashboard') }}">
            <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 text-dark">dashboard</i>
            </div>
            <span class="nav-link-text ms-1 ">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ url('plants') }}">
            <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1  text-dark">Plants</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ url('sliders') }}">
            <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10  text-dark">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1  text-dark">Sliders</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " href="pages/rtl.html">
            <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">RTL</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " href="pages/notifications.html">
            <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10  text-dark">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3  text-dark">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " href="pages/profile.html">
            <div class="text-drk text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10 text-dark">person</i>
            </div>
            <span class="nav-link-text ms-1 text-dark">Profile</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    </div>
  </aside>

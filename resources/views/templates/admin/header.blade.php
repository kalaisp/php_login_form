<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Inode</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <div class="logo-details">
        {{-- <i class='bx bx-user'></i> --}}
        <div class="logo_name">Employee</div>
        {{-- <i class='bx bx-menu-alt-right' id="btn"></i> --}}
      </div>

      <div class="row col-lg-10">

        <div class="col-lg-11">
            <div class="d-flex justify-content-end"> <!-- Changed this to ensure the profile section aligns to the right -->

                <nav class="header-nav me-1 ">
                    <ul class="d-flex align-items-center">

                        <li class="nav-item dropdown pe-2 ">
                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                <img src="{{ url('/assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                                <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                                <li class="dropdown-header text-left p-1">
                                    <h6>Administration</h6>
                                    <span>Administration</span>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center p-1" href="{{ url('/reset/password') }}">
                                        <i class="bi bi-key"></i>
                                        <span>Change Password</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center p-1" href="{{ url('/inode.iis/logout') }}">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Sign Out</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
      </div>
    </div>

</header>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
<?php  //dd(session('user_session_data')) ?>
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a href="{{ route('staff.index') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('login') }}">
              <i class='bx bx-user-circle'></i>
              <span class="links_name">User</span>
            </a>
            <span class="tooltip">User</span>
          </li>

        <li>
            <a href="{{ route('indexemp') }}">
              <i class='bx bxs-user-check'></i>
              <span class="links_name">Employee</span>
            </a>
            <span class="tooltip">Employee</span>
          </li>


    </ul>


</aside>

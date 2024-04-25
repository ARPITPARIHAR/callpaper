
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>

</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
           
            <div class="brand-logo">
                <a href="./index.html" class="text-nowrap logo-img">
                  {{-- <img src="/assets/images/logos/dark-logo.svg" width="180" alt="" /> --}}
                </a>
                <span class="black-text">ScholarlyPublishingHelp</span>
                <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                  <i class="ti ti-x fs-8"></i>
                </div>
              </div>
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
            
              <li class="sidebar-item">
                <a class="sidebar-link" href="/form" aria-expanded="false">
                  <span>
                    <i class="ti ti-article"></i>
                  </span>
                  <span class="hide-menu">Form Table</Table></Table></span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/contact" aria-expanded="false">
                  <span>
                    <i class="ti ti-alert-circle"></i>
                  </span>
                  <span class="hide-menu">Contact Table</span>
                </a>
              </li>
              {{-- <li class="sidebar-item">
                <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-cards"></i>
                  </span>
                  <span class="hide-menu">Card</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-file-description"></i>
                  </span>
                  <span class="hide-menu">Forms</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-typography"></i>
                  </span>
                  <span class="hide-menu">Typography</span>
                </a>
              </li> --}}
              {{-- <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">AUTH</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-login"></i>
                  </span>
                  <span class="hide-menu">Login</span>
                </a>
              </li> --}}
              <li class="sidebar-item">
                <a class="sidebar-link" href="/register" aria-expanded="false">
                  <span>
                    <i class="ti ti-user-plus"></i>
                  </span>
                  <span class="hide-menu">Register</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/logout" aria-expanded="false">
                  <span><i class="fas fa-sign-out-alt"></i></span>
                  <span class="hide-menu">Logout</span>
                </a>
              </li>
              {{-- <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">EXTRA</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/logout" aria-expanded="false">
                  <span>
                    <i class="ti ti-power-off"></i>
                  </span>
                  <span class="hide-menu">Logout</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Sample Page</span>
                </a>
              </li>
            </ul> --}}
            {{-- <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
              <div class="d-flex">
                <div class="unlimited-access-title me-3">
                  <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
                  <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
                </div>
                <div class="unlimited-access-img">
                  <img src="../assets/images/backgrounds/rocket.png" alt="" class="img-fluid">
                </div>
              </div>
            </div> --}}
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>


      <style>
        .left-sidebar {
          background-color: rgb(248, 254, 118) !important;
          color:white !important;
        }
        .black-text {
      color: black;
    }
      </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <style>
          /* CSS for logout button */
          .sidebar-item a {
            display: flex;
            align-items: center;
            text-decoration: none;
          }
          .sidebar-item a .fa {
            margin-right: 10px;
          }
          .brand-logo {
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #000;
      border-radius: 20px;
      padding: 20px;
    }
    .brand-logo a {
      text-decoration: none;
    }
    .black-text {
      font-size: 16px;
 
     
      letter-spacing: 2px;
      color: #FFF; /* Change text color as needed */
      margin: 0 10px; /* Add spacing around the text */
      font-family: 'Arial', sans-serif; /* Change font family as needed */
    }
    .black-text span {
      display: inline-block;
    }
          </style>
@extends('admin.layouts.app')
@section('meta_title', 'game')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <!-- Add CSS for styling -->
  <style>
        /* Add custom styles here */
      
        .table-container {
            max-width: 100%;
            overflow-x: auto;
        }
        .table {
            min-width: 100%; /* Set minimum width to 100% */
        }
        
           @media (min-width: 768px) { /* Adjust this breakpoint as needed */
        .main-content {
            margin-left: 40%; /* Adjust the padding to accommodate the left sidebar */
        }
        .table-container{
             margin-left: 20%;
              margin-right: 5%;
               margin-top: 2%;
        }
    }
    </style>

<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
									Dropdown
								</a>
								<div class="dropdown-menu profile-notification ">
									<ul class="pro-body">
										<li><a href="/logout" class="dropdown-item"><i class="fas fa-circle"></i> Logout</a></li>
										{{-- <li><a href="email_inbox.html" class="dropdown-item"><i class="fas fa-circle"></i> My Messages</a></li> --}}
										<!--<li><a href="auth-signin.html" class="dropdown-item"><i class="fas fa-circle"></i> Lock Screen</a></li>-->
									</ul>
								</div>
							</div>
						</li>
						<li class="nav-item">
							<div class="dropdown mega-menu">
								<a class="dropdown-toggle h-drop" href="#" data-toggle="dropdown">
									Mega
								</a>
								<div class="dropdown-menu profile-notification ">
									<div class="row no-gutters">
										<div class="col">
											<h6 class="mega-title">UI Element</h6>
											
										</div>
										<div class="col">
											<h6 class="mega-title">Forms</h6>
										
										
										
									</div>
								</div>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
							
								</a>
								
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-top: 20px;font-size: 44px;">
                                    <i class="feather icon-user"></i>
                                </a>
                                
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										{{-- <img src="" class="" alt="User-Profile-Image"> --}}
										<span>PublishingHelp</span>
										<a href="auth-signin.html" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="{{ route('logout') }}" class="dropdown-item"><i class="feather icon-log-out"></i>
											Logout</a></li>

										<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>

<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				
					
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="/dashboard" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
				
				
					
					<li class="nav-item pcoded-menu-caption">
					    <label>Forms &amp; table</label>
					</li>
					<li class="nav-item">
					    <a href="/form" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
					</li>
					<li class="nav-item">
					    <a href="/contact" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Contacts</span></a>
					</li>
				
				
				
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="/register" target="_blank">Sign up</a></li>
					        <!--<li><a href="auth-signin.html" target="_blank">Sign in</a></li>-->
					    </ul>
					</li>
				
				</ul>
				
				
			</div>
		</div>
	</nav>


    
                <div class="table-container" style="background-color:white;border-radius:10px";>
                    <table class="table table-striped">
                        <h2 style="text-align:center;">Form-Data</h2>
                        <thead> <!-- Dark header background -->
                <tr>
                    <th>S.N.</th> <!-- Serial number column -->
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <!-- Add more table headers if needed -->
                </tr>
            </thead>
            <tbody>
                @php $serial = 1; @endphp <!-- Initialize serial number variable -->
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $serial++ }}</td> <!-- Display serial number and increment -->
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->message }}</td>
                    <!-- Add more table data cells if needed -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="pagination">
        {!! $contacts->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
</div>

@section('style')

@endsection

@section('script')

@endsection




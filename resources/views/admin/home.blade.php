@extends('admin.layouts.app')
@section('meta_title','game')

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
										<li><a href="auth-signin.html" class="dropdown-item"><i class="fas fa-circle"></i> Lock Screen</a></li>
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

										<!--<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>-->
										<!--<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>-->
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
				
				
					<!--<li class="nav-item pcoded-menu-caption">-->
					<!--	<label>Pages</label>-->
					<!--</li>-->
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
	<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar -->
        <div class="col-md-2">
            <!-- Include left sidebar content here -->
        </div>
        <!-- Main Content -->
        <div class="col-md-10">
            <!-- Main content goes here -->
            <h1>Welcome to Dashboard of Scholarly Publishing Help</h1>
            <!-- Include the register form here -->
        </div>
    </div>
</div>


@section('style')
    
@endsection
@section('script')
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
        .navbar-wrapper {
    height: auto !important;
}

.scroll-div {
    max-height: calc(100vh - 56px); /* Adjust 56px according to your header height */
    overflow-y: auto; /* Add scrollbar if content exceeds height */
}

/* Ensure the content area takes up remaining space */
.main-content {
    min-height: calc(100vh - 56px); /* Adjust 56px according to your header height */
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
        
        /* Add this CSS to adjust the height dynamically based on screen size */

    }
    </style>
</head>
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
								
								<div class="dropdown-menu profile-notification ">
									<div class="row no-gutters">
										<div class="col">
										
											
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
				
				
					<li class="nav-item pcoded-menu-caption">
						<label>Pages</label>
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
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Title</th>
                                <th>Article</th>
                                <th>Abstract</th>
                                <th>Keywords</th>
                                <th>Reference</th>
                                <th>Author</th>
                                <th>Galleys</th>
                                <th>Issue</th>
                                <th>Page</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($forms as $index => $form)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $form->title }}</td>
                                <td>{{ $form->article }}</td>
                                <td>{{ $form->abstract }}</td>
                                <td>{{ $form->keywords }}</td>
                                <td>{{ $form->reference }}</td>
                                <td>{{ $form->author }}</td>
                                <td>
                                    <a href="{{ route('view.pdf', ['id' => $form->id]) }}" target="_blank" style="color: red;">
                                        <i class="fas fa-file-pdf"></i> {{ $form->galleys }}
                                    </a>
                                </td>
                                <td>{{ $form->issue }}</td>
                                <td>{{ $form->page }}</td>
                                <td>
                                    <form action="{{ route('delete.form', ['id' => $form->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="pagination text-center">
                    {!! $forms->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
</div>
<style>
	.pagination {
		display: flex;
		justify-content: center;
	/* Adjust margin-top as needed */
	}
	.pagination .flex-shrink-0 {
    font-size: 38px;
	justify-content: center;/* Adjust the font size as needed */
}


	</style>

@section('style')
    <!-- Add custom styles here -->
@endsection

@section('script')
    <!-- Add custom scripts here -->
@endsection






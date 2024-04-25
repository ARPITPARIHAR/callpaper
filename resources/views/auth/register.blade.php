@extends('admin.layouts.app')
@section('meta_title', 'game')
 @include('admin.includes.navbar') 
@include('admin.includes.leftbar') 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

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


.main-content {
    min-height: calc(100vh - 56px); /* Adjust 56px according to your header height */
}

           @media (min-width: 768px) { /* Adjust this breakpoint as needed */
        .main-content {
            margin-left: 40%; 
        }
        .table-container{
             margin-left: 20%;
              margin-right: 5%;
               margin-top: 2%;
        }

		.td {
        min-width: 50px; /* Set a minimum width for table cells */
        padding: 8px; /* Add padding to cells for spacing */
        border: 1px solid #ddd; /* Add borders to cells */
    }
    }
    .register-container {
    margin-left: auto;
    margin-right: auto;
}


    </style>
  <div class="register-container mx-auto" style="max-width: 800px;">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<head>
    <!-- Other meta tags and links -->
    <link rel="stylesheet" href="path/to/custom.css">
</head>
<style>
@media (max-width: 576px) {
    .card {
        width: 90%;
    }
}
</style>
@section('style')
    
@endsection
@section('script')
    
@endsection
@extends('admin.layouts.app')
@section('meta_title', 'game')
{{-- @include('admin.includes.navbar') --}}
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
  

    </style>

                <div class="table-container" style="background-color:white;border-radius:10px";>
                    <table class="table table-striped">
                        <h2 style="text-align:center;">Contact-Data</h2>
                        <thead> <!-- Dark header background -->
                <tr>
                    <th>S.N.</th> 
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
					<th>Action</th>
                 
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
                    <td>
						<form action="{{ route('delete.form', ['id' => $contact->id]) }}" method="POST">
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-primary">Delete</button>
						</form>
					</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
	<div class="pagination" style="color: red;">
		{!! $contacts->withQueryString()->links('pagination::bootstrap-5') !!}
	</div>
	
</div>
<style>
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
	color: red !important;/ /* Adjust margin-top as needed */
}

.pagination {
        font-size: 1.25rem;
		color: red !important;/* Increase font size */
    }
    
    .pagination .page-link {
        padding: 0.75rem 1.25rem;
		/ /* Adjust padding for larger links */
    }

	.pagination p.small.text.muted {
    color: inherit !important; /* Use the color defined in .pagination */
}

</style>



@section('style')

@endsection

@section('script')

@endsection




@extends('admin.layouts.app')
@section('meta_title', 'game')

@include('admin.includes.navbar')
@include('admin.includes.leftbar')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <!-- Add CSS for styling -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 2px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .table-container {
            overflow-x: auto; /* Enable horizontal scrolling */
            margin-top: 10px; /* Add margin to separate table from navbar */
        }

        /* Adjust left sidebar */
        .left-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px; /* Adjust width as needed */
            height: 100%; /* Fill the entire height */
            background-color: #fff; /* Set background color */
            border-right: 1px solid #ccc; /* Add border for separation */
            z-index: 1000; /* Ensure it's above other content */
        }

        /* Adjust main content to accommodate left sidebar */
        .main-content {
            margin-left: 250px; /* Adjust margin to accommodate left sidebar width */
        }
    </style>
</head>

<div class="content">
    <!-- Main Content -->
    <div class="left-sidebar">
        @include('admin.includes.leftbar')
    </div>
    <div class="main-content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title" style="text-align: center;">Form Data</h2>
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>S.N.</th> <!-- Serial number column -->
                                    <th>Title</th>
                                    <th>Article</th>
                                    <th>Abstract</th>
                                    <th>Keywords</th>
                                    <th>Reference</th>
                                    <th>Author</th>
                                    <th>Galleys</th>
                                    <th>Issue</th>
                                    <th>Page</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($forms as $index => $form)
                                    <tr>
                                        <td>{{ $index + 1 }}</td> <!-- Displaying serial number -->
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
                                    </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                   
                 
                    <div class="pagination">
                        {!! $forms->withQueryString()->links('pagination::bootstrap-5') !!}
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Content -->
</div>

</html>









@section('style')
    
@endsection

@section('script')
    
@endsection

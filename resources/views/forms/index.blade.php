@extends('admin.layouts.app')
@section('meta_title', 'game')

@include('admin.includes.navbar')
{{-- @include('admin.includes.leftbar') --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <!-- Add CSS for styling -->
    <style>
        /* Add custom styles here */
        .table-responsive {
            overflow-x: auto;
        }
    </style>
</head>

<div class="content">
    <!-- Main Content -->
    <div class="row">
        <div class="col-md-2">
            <div class="left-sidebar">
                @include('admin.includes.leftbar')
            </div>
        </div>
        <div class="col-md-10">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title" style="text-align: center;">Form Data</h2>
                            <div class="table-responsive">
                                <table class="table table-striped">
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
        </div>
    </div>
    <!-- End Main Content -->
</div>
</html>

@section('style')
    <!-- Add custom styles here -->
@endsection

@section('script')
    <!-- Add custom scripts here -->
@endsection

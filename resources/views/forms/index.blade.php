@extends('admin.layouts.app')
@section('meta_title','game')

@include('admin.includes.navbar') 
@include('admin.includes.leftbar')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  /* Add custom styles here */
  .table-container {
    max-width: 100%;
    overflow-x: auto;
    margin-top: 20px; /* Adjust the top margin for spacing */
    border-radius: 10px;
  }

  .table {
    width: 100%; /* Ensure the table fills the container width */
  }

  /* Add custom styles for the table header (optional) */
  .table thead th {
    background-color: #007bff; /* Change the background color of table headers */
    color: white; /* Change the text color of table headers */
  }

  /* Add custom styles for the table cells (optional) */
  .table tbody td {
    padding: 15px;
    background-color:white; /* Adjust padding for better spacing */
  }

  /* Add custom styles for the pagination (optional) */
  .pagination {
    margin-top: 20px; /* Adjust the top margin for spacing */
  }

  /* Apply left margin to the table on laptop screens */
  @media (min-width: 992px) {
    .table-container {
      margin-left: 250px; /* Adjust the left margin as needed */
    }
  }
</style>

<div class="container">
  <div class="table-container">
    <table class="table table-striped">
      <h2 class="text-center">Form-Data</h2>
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
         
          <td>
            <form action="{{ route('destroy.form', ['id' => $form->id]) }}" method="POST">
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
  <div class="pagination text-center">
    {!! $forms->withQueryString()->links('pagination::bootstrap-5') !!}
  </div>
</div>

@section('style')
@endsection

@section('script')
@endsection

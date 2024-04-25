@extends('admin.layouts.app')
@section('meta_title','game')

 @include('admin.includes.navbar') 

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  /* Add custom styles here */
  .table-container {
    max-width: 100%;
    overflow-x: auto;
    margin-top: 0px;
    margin-left: 20%; /* Adjust this margin to align the table with the left sidebar */
  }

  .table {
    /* Set minimum width to 100% */
    width: 100%; /* Ensure the table fills the container width */
  }

  /* Add custom styles for the page-header (optional) */
  .page-header {
    /* You can style the page header here if needed */
  }

  /* Add custom styles for the page-header-title (optional) */
  .page-header-title {
    /* You can style the page header title here if needed */
  }
</style>

@include('admin.includes.leftbar')

<div class="table-container" style="background-color:white;border-radius:10px;">
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

@section('style')
  @endsection

@section('script')
  @endsection
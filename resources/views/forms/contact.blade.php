@extends('admin.layouts.app')
@section('meta_title', 'game')

@include('admin.includes.navbar')
@include('admin.includes.leftbar')

<div class="container" style="margin-left: 250px;"> <!-- Add margin to accommodate left sidebar -->
    <h2 style="text-align: center;">Contact Messages</h2>
    <div class="table-responsive"> <!-- Make the table responsive -->
        <table class="table table-bordered table-striped table-hover"><!-- Add Bootstrap table classes for styling -->
            <thead class="thead-dark"> <!-- Dark header background -->
                <tr>
                    <th>S.N.</th> <!-- Serial number column -->
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
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


@extends('admin.layout.adminLayout')
@section('content')
    <!--begin::Page-->

    <div class="d-flex flex-column flex-row-fluid wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <a class="btn btn-info" href="{{ url('add-company-form') }}">Add new company</a>
                </div>
            </div>
            @if ($message = Session::get('success'))
                <div class="container alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif


            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Company Name</th>
                    <th>Company Email</th>
                    <th>Company Phone</th>
                    <th width="280px">Action</th>
                </tr>
                @php
                    $i = 0;
                @endphp
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $company->company_name }}</td>
                        <td>{{ $company->company_email }}</td>
                        <td>{{ $company->company_phone }}</td>
                        <td>
                            <form action="{{ url('delete-company', $company->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ url('show-company', $company->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ url('edit-company', $company->id) }}">Edit</a>
                                {{-- <a class="btn btn-primary" href="{{ url('edit-company'),$company->id) }}">Edit</a> --}}
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>



        </div>
    </div>
@endsection

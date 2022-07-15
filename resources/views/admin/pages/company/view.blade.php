@extends('admin.layout.adminLayout')
@section('content')
    <div class="d-flex flex-column flex-row-fluid wrapper">
        <div class="row">
            <div class="col-lg-11">
                <h2>Company Details</h2>
            </div>
            <div class="col-lg-1">
                <a class="btn btn-primary" href="{{ url('company-list') }}"> Back</a>
            </div>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>Company Name:</th>
                <td>{{ $company->company_name }}</td>
            </tr>
            <tr>
                <th>Company Emial:</th>
                <td>{{ $company->company_email }}</td>
            </tr>
            <tr>
                <th>Company Phone:</th>
                <td>{{ $company->company_phone }}</td>
            </tr>
            <tr>
                <th>Vat number:</th>
                <td>{{ $company->vat_number }}</td>
            </tr>
            <tr>
                <th>Website:</th>
                <td>{{ $company->website_url }}</td>
            </tr>
            <tr>
                <th>City:</th>
                <td>{{ $company->city }}</td>
            </tr>
            <tr>
                <th>Counry:</th>
                <td>{{ $company->country }}</td>
            </tr>
            <tr>
                <th>State:</th>
                <td>{{ $company->state }}</td>
            </tr>
            <tr>
                <th>Address:</th>
                <td>{{ $company->address }}</td>
            </tr>
            <tr>
                <th>Zip Code:</th>
                <td>{{ $company->zip_code }}</td>
            </tr>

        </table>
    </div>
@endsection

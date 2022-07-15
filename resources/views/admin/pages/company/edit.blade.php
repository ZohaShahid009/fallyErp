@extends('admin.layout.adminLayout')
@section('content')
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->

            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11">
                            <h2>Update Company</h2>
                        </div>
                        <div class="col-lg-1">
                            <a class="btn btn-primary" href="{{ url('company-list') }}"> Back</a>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ url('update-company', $company->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="company_name">company_name:</label>
                            <input type="text" class="form-control" id="company_name" placeholder="Enter company_name"
                                name="company_name" value="{{ $company->company_name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email"
                                name="email" value="{{ $company->company_email }}">
                        </div>
                        <div class="form-group">
                            <label for="company_phone">company_phone:</label>
                            <input class="form-control" id="phone" name="phone" rows="10"
                                placeholder="Enter phone" value="{{ $company->company_phone }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

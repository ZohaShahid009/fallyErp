@extends('admin.layout.adminLayout')
@section('content')
    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <div class="container mb-5">
            <div class="card card-custom example example-compact">
                <div class="container mt-4">
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
                    {{-- zoha --}}
                    <form method="POST" action="{{ route('change.password') }}">
                        @csrf
                        <div class="card-body">
                            <div class="separator separator-solid my-10"></div>
                            <div class="my-5">
                                <h3 class=" text-dark font-weight-bold mb-10">Password Settings:</h3>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label for="password">Current Password</label>
                                    <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password"
                           \>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label for="password">New Password</label>
                                    <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                                </div>
                                </div>
                               
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label for="password">New Confirm Password</label>
                                    <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6">
                                        {{-- <button type="submit" class="btn btn-success mr-2">Update</button> --}}
                                        <input type="submit" value="Update" class="btn btn-success ">
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            {{-- rff end --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

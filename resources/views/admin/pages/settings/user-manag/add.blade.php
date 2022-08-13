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
                    <form method="POST" action="{{ url('add-user') }}" class="form" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="separator separator-solid my-10"></div>
                            <div class="my-5">
                                <h3 class=" text-dark font-weight-bold mb-10">Create User :</h3>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>First Name</label>
                                    <input name="first_Name" id="first_Name" type="text" class="form-control" />

                                </div>
                             
                                <div class="col-lg-6">
                                    <label>Last Name:</label>
                                    <input name="Last_name" id="Last_name" type="text" class="form-control" />
                                </div>
                            </div>
                            {{--  start  --}}
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Email</label>
                                    <input name="email" id="email" type="email" class="form-control" />
                                </div>
                                <div class="col-lg-6">
                                    <label>Phone Number:</label>
                                    <input name="Phone_Number" id="Phone_Number" type="" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>User Type</label>
                                    <select class="form-control" name="User_Type">
                                        {{--  <option>{{ $settings->industry}}</option>  --}}
                                        <option value="Admin">Admin</option>
                                            <option value="Staff">Staff</option>
                                            <option value="User">User</option>
                                            
                                    </select>
                                </div>
                            </div>
                            
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
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

@extends('admin.layout.adminLayout')
@section('content')
    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <div class="container-fluid mb-5">

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
                </div>
                <div class="card-header">
                    <h3 class="card-title">Fill the Form to add new Super Admin</h3>
                </div>
                <form class="form" action="{{ url('add-superadmin') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Profile Image:</h3>
                        <div class="mb-15">
                            <div class="form-group row">
                                <div class="col-lg-3"></div>
                                <div class=" mt-5 mb-5 image-input image-input-outline image-input-circle" id="kt_image_3">
                                    <div class="image-input-wrapper" style="background-image: url({{ asset('/') }}superadmin_images/blank.png)">
                                    </div>
                                    <label
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="change" data-toggle="tooltip" title=""
                                        data-original-title="Change avatar">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="profile_avatar_remove" />
                                    </label>
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Full Name:</label>
                            <input name="name" id="name" type="text" class="form-control form-control-solid"
                                placeholder="Enter full name" />
                            <span class="form-text text-muted">Please enter your full name</span>
                        </div>
                        <div class="form-group">
                            <label>Email address:</label>
                            <input name="email" id="email" type="email" class="form-control form-control-solid"
                                placeholder="Enter email" />
                            <span class="form-text text-muted">We'll never share your email with anyone else</span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                <input id="password" name="password" type="password"
                                    class="form-control form-control-solid" placeholder="password" />
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

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
                </div>
                <div class="card-header">
                    <h3 class="card-title">Update Super Admin details</h3>
                </div>
                <form class="form" action="{{ url('update-superadmin', $superadmin->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Profile Image:</h3>
                        <div class="mb-15">
                            <div class="form-group row">
                                <div class="col-lg-3"></div>
                                <div class=" mt-5 mb-5 image-input image-input-outline image-input-circle" id="kt_image_3">
                                    <div class="image-input-wrapper" style="background-image: url({{ asset('/') }}superadmin_images/{{ $superadmin->profile_image }})">
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
                        <h3 class="font-size-lg text-dark font-weight-bold mb-6">2. SuperAdmin Info:</h3>
                        <div class="mb-15">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-right">First Name:</label>
                                <div class="col-lg-6">
                                    <input id="name" name="name" type="text" class="form-control"
                                        value="{{ $superadmin->name }}" />
                                    <span class="form-text text-muted">Please enter your first name</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-right">Email address:</label>
                                <div class="col-lg-6">
                                    <input id="email" name="email" type="email" class="form-control"
                                        value="{{ $superadmin->email }}" />
                                    <span class="form-text text-muted">We'll never share your email with anyone
                                        else</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-success mr-2">Update</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

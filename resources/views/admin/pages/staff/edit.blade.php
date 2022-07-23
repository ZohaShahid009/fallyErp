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
                    <h3 class="card-title">Update Staff details</h3>
                </div>
                <form class="form" action="{{ url('update-staff', $staff->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Profile Image:</h3>
                        <div class="mb-15">
                            <div class="form-group row">
                                <div class="col-lg-3"></div>
                                <div class=" mt-5 mb-5 image-input image-input-outline image-input-circle" id="kt_image_3">
                                    <div class="image-input-wrapper"
                                        style="background-image: url({{ asset('/') }}uploaded_images/staff_images/{{ $staff->image }})">
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
                        <h3 class="font-size-lg text-dark font-weight-bold mb-6">2. Customer Info:</h3>
                        <div class="mb-15">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-right">First Name:</label>
                                <div class="col-lg-6">
                                    <input id="first_name" name="first_name" type="text" class="form-control"
                                        value="{{ $staff->first_name }}" />
                                    <span class="form-text text-muted">Please enter your first name</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-right">Last Name:</label>
                                <div class="col-lg-6">
                                    <input id="last_name" name="last_name" type="text" class="form-control"
                                        value="{{ $staff->last_name }}" />
                                    <span class="form-text text-muted">Please enter your last name</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-right">Email address:</label>
                                <div class="col-lg-6">
                                    <input id="email" name="email" type="email" class="form-control"
                                        value="{{ $staff->email }}" />
                                    <span class="form-text text-muted">We'll never share your email with anyone
                                        else</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-right">phone:</label>
                                <div class="col-lg-6">
                                    <input id="phone" name="phone" type="phone" class="form-control"
                                        value="{{ $staff->phone }}" />
                                    <span class="form-text text-muted">We'll never share your phone with anyone
                                        else</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-right">hourly Rate:</label>
                                <div class="col-lg-6">
                                    <input id="hourly_rate" name="hourly_rate" type="hourly_rate" class="form-control"
                                        value="{{ $staff->hourly_rate }}" />
                                    <span class="form-text text-muted">We'll never share your hourly_rate with anyone
                                        else</span>
                                </div>
                            </div>
                        </div>

                        <h3 class="font-size-lg text-dark font-weight-bold mb-6">2. Social Media Details:</h3>
                        <div class="mb-3">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-right">FaceBook:</label>
                                <div class="col-lg-6">
                                    <input id="facebook_url" name="facebook_url" type="text" class="form-control"
                                        value="{{ $staff->facebook_url }}" />
                                    <span class="form-text text-muted">Please enter your Facebook</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-right">LinkedIn</label>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="la la-chain"></i></span></div>
                                        <input id="linkedin_url" name="linkedin_url" type="text" class="form-control"
                                            value="{{ $staff->linkedin_url }}" />
                                    </div>
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

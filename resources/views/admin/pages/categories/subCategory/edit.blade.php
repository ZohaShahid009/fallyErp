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
                    <h3 class="card-title">Update Sub Category details</h3>
                </div>
                <form class="form" action="{{ url('edit/sub-categories', $subcategory->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        {{-- <h3 class="font-size-lg text-dark font-weight-bold mb-6">1. Image:</h3>
                        <div class="mb-15">
                            <div class="form-group row">
                                <div class="col-lg-3"></div>
                                <div class=" mt-5 mb-5 image-input image-input-outline image-input-circle" id="kt_image_3">
                                    <div class="image-input-wrapper"
                                        style="background-image: url({{ asset('/') }}uploaded_images/sub_cat_images/{{ $subcategory->image }})">
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
                        </div> --}}
                        <div class="form-group">
                            {{-- <label for="input-file-to-destroy">Product Image</label>
                                    <input type="file" id="input-file-to-destroy"  name="profile_avatar"  class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000"
                                    /> --}}
                            <label for="input-file-to-destroy">Product Image</label>
                            <input type="file" id="input-file-to-destroy" name="image" class="dropify"
                                data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000"
                                data-default-file="{{ asset('images/' . $subcategory->image) }}" />



                        </div>
                        <h3 class="font-size-lg text-dark font-weight-bold mb-6">2. Category Info:</h3>
                        <div class="mb-15">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label text-right">Title:</label>
                                <div class="col-lg-6">
                                    <input id="title" name="title" type="text" class="form-control"
                                        value="{{ $subcategory->title }}" />
                                    <span class="form-text text-muted">Please enter your Title</span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-15">
                            <div class="form-group row">
                                <div class="col-3"></div>
                                <div class="col-6">
                                    <label for="exampleSelect1">Parent category:<span class="text-danger">*</span></label>
                                    <select class="form-control" name="parent_cat_id" id="parent_cat_id">
                                        @foreach ($category as $categories)
                                            <option value="{{ $categories->id }}">{{ $categories->title }}</option>
                                        @endforeach
                                    </select>
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

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
                    <h3 class="card-title">Company Details</h3>
                    {{-- <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div> --}}
                </div>
                <!--begin::Form-->
                <form class="form" action="{{ url('/company/details/1') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="my-5">
                            <h3 class=" text-dark font-weight-bold mb-10">Details:</h3>
                        </div>
                        <div class="form-group row mt-3">
                            <label class="col-lg-1 col-form-label text-lg-right">Name:</label>
                            <div class="col-lg-3">
                                <input value="{{ $company->company_name }}" id="company_name" name="company_name"
                                    type="text" class="form-control" placeholder="company Name" />
                                <span class="form-text text-muted">Company name</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">ID:</label>
                            <div class="col-lg-2">
                                <input readonly value="{{ $company->id }}" type="text" class="form-control"
                                    placeholder="company Name" />
                                <span class="form-text text-muted">ID number</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">Email:</label>
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-user"></i>
                                        </span>
                                    </div>
                                    <input value="{{ $company->company_email }}" id="company_email" name="company_email"
                                        type="email" class="form-control" placeholder="Enter your email" />
                                </div>
                                <span class="form-text text-muted">Please enter company email</span>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group row">
                            <label class="col-lg-1 col-form-label text-lg-right">website:</label>
                            <div class="col-lg-3">
                                <input value="{{ $company->website_url }}" id="website_url" name="website_url"
                                    type="text" class="form-control" placeholder="Enter Website url" />
                                <span class="form-text text-muted">Please enter website url</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">Phone:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input value="{{ $company->company_phone }}" id="company_phone" name="company_phone"
                                        type="phone" class="form-control" placeholder="Phone number" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-phone"></i>
                                        </span>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Please enter company phone</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">VAT:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input value="{{ $company->vat_number }}" id="vat_number" name="vat_number"
                                        type="text" class="form-control" placeholder="Enter vat number" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-info-circle"></i>
                                        </span>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Please enter your Vat number</span>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group row">
                            <label class="col-lg-1 col-form-label text-lg-right">Type:</label>
                            <div class="col-lg-5">

                                <div class="form-group">

                                    <select class="form-control" name="company_size" id="category">
                                        <option value="{{ $company->company_size }}" hidden selected>
                                            {{ $company->company_size }}...
                                        </option>
                                        <option value="Micro-sized business">Micro-sized business</option>
                                        <option value="Small-sized business">Small-sized business</option>
                                        <option value="Medium-sized business">Medium-sized business</option>
                                        <option value="Large-sized business">Large-sized business</option>
                                    </select>
                                </div>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">Industry:</label>
                            <div class="col-lg-5">

                                <div class="form-group">

                                    <select class="form-control" name="industry" id="category">
                                        <option value="{{ $company->industry }}" hidden selected>
                                            {{ $company->industry }}...
                                        </option>
                                        <option value="Technology">Technology</option>
                                        <option value="Health">Health</option>
                                        <option value="Media">Media</option>
                                        <option value="Construction">Construction</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group row">
                            <label class="col-lg-1 col-form-label text-lg-right">Logo:</label>
                            <div class="col-lg-5">

                                <div class="form-group">
                                    <input type="file" id="input-file-to-destroy" name="company_logo" class="dropify"
                                        data-allowed-formats="portrait square" data-max-file-size="2M"
                                        data-max-height="2000"
                                        data-default-file="{{ asset('images/' . $company->company_logo) }}" />
                                </div>
                            </div>
                        </div>
                        <div class="separator separator-solid my-10"></div>
                        <div class="my-5">
                            <h3 class=" text-dark font-weight-bold mb-10">Address Details:</h3>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-1 col-form-label text-lg-right">country:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input value="{{ $company->country }}" id="country" name="country" type="text"
                                        class="form-control" placeholder="Enter your country" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-globe"></i>
                                        </span>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Please enter your country</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">city:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input value="{{ $company->city }}" id="city" name="city" type="text"
                                        class="form-control" placeholder="Enter your city" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-city"></i>
                                        </span>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Please enter your city</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">State:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input value="{{ $company->state }}" id="state" name="state" type="text"
                                        class="form-control" placeholder="Enter state/provence" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-map-marked"></i>
                                        </span>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Please enter your State</span>
                            </div>

                            {{-- <label class="col-lg-1 col-form-label text-lg-right">User Group:</label>
                            <div class="col-lg-3">
                                <div class="radio-inline">
                                    <label class="radio radio-solid">
                                        <input type="radio" name="example_2" checked="checked" value="2" />
                                        <span></span>Sales Person</label>
                                    <label class="radio radio-solid">
                                        <input type="radio" name="example_2" value="2" />
                                        <span></span>Customer</label>
                                </div>
                                <span class="form-text text-muted">Please select user group</span>
                            </div> --}}
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group row">
                            <label class="col-lg-1 col-form-label text-lg-right">Zip code:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input value="{{ $company->zip_code }}" id="zip_code" name="zip_code"
                                        type="text" class="form-control" placeholder="Enter your zip code" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-bookmark-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Please enter your zip code</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">Address:</label>
                            <div class="col-lg-7">
                                <div class="input-group">
                                    <input value="{{ $company->address }}" id="address" name="address" type="text"
                                        class="form-control" placeholder="Enter your Address" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-map-marker"></i>
                                        </span>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Please enter your Address</span>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="my-5">
                            <h3 class=" text-dark font-weight-bold mb-10">Email Signature:</h3>
                        </div>
                        <div class="form-group row">

                            <div class="col-lg-9">
                                {{-- <div class="input-group">
                                    <textarea class="form-control" rows="5" id="summernote" name="email_signature"></textarea>
                                </div> --}}
                                <div class="form-group">
                                    {{-- <label for="comment">Description:</label> --}}
                                    <textarea class="form-control" rows="5" id="summernote" name="email_signature"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>

            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-7">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
    </div>
    <script>
        document.getElementById("summernote").value = "{{ $company->email_signature }}";
    </script>

@endsection

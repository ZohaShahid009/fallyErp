@extends('admin.layout.adminLayout')
@section('content')
    {{-- <div class="d-flex flex-column flex-root">
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
    </div> --}}


    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <div class="container mb-5">

            <div class="card card-custom example example-compact">
                <div class="container mt-4">
                    {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                </div>
                <div class="card-header">
                    <h3 class="card-title">Update company details</h3>
                    {{-- <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div> --}}
                </div>
                <!--begin::Form-->
                <form class="form" action="{{ url('update-company', $company->id) }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="my-5">
                            <h3 class=" text-dark font-weight-bold mb-10">Personal Details:</h3>
                        </div>
                        <div class="form-group row mt-3">
                            <label class="col-lg-1 col-form-label text-lg-right">Name:</label>
                            <div class="col-lg-3">
                                <input id="company_name" name="company_name" type="text" class="form-control"
                                    value="{{ $company->company_name }}" />
                                <span class="form-text text-muted">Please enter your company name</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">primary contact:</label>
                            <div class="col-lg-3">
                                <input id="primary_contact" name="primary_contact" type="text" class="form-control"
                                    value="{{ $company->primary_contact }}" />
                                <span class="form-text text-muted">Please enter primary contact</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">Email:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-user"></i>
                                        </span>
                                    </div>
                                    <input id="company_email" name="company_email" type="email" class="form-control"
                                        value="{{ $company->company_email }}" />
                                </div>
                                <span class="form-text text-muted">Please enter company email</span>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group row">
                            <label class="col-lg-1 col-form-label text-lg-right">website:</label>
                            <div class="col-lg-3">
                                <input id="website_url" name="website_url" type="text" class="form-control"
                                    value="{{ $company->website_url }}" />
                                <span class="form-text text-muted">Please enter website url</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">Phone:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input id="company_phone" name="company_phone" type="phone" class="form-control"
                                        value="{{ $company->company_phone }}" />
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
                                    <input id="vat_number" name="vat_number" type="text" class="form-control"
                                        value="{{ $company->vat_number }}" />
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
                        <div class="my-5">
                            <h3 class=" text-dark font-weight-bold mb-10">Address Details:</h3>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-1 col-form-label text-lg-right">country:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input id="country" name="country" type="text" class="form-control"
                                        value="{{ $company->country }}" />
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
                                    <input id="city" name="city" type="text" class="form-control"
                                        value="{{ $company->city }}" />
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
                                    <input id="state" name="state" type="text" class="form-control"
                                        value="{{ $company->state }}" />
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
                                    <input id="zip_code" name="zip_code" type="text" class="form-control"
                                        value="{{ $company->zip_code }}" />
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
                                    <input id="address" name="address" type="text" class="form-control"
                                        value="{{ $company->address }}" />
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
                            <h3 class=" text-dark font-weight-bold mb-10">Social media Details:</h3>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-1 col-form-label text-lg-right">Facebok:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-facebook"></i>
                                        </span>
                                    </div>
                                    <input id="facebook_url" name="facebook_url" type="text" class="form-control"
                                        value="{{ $company->facebook_url }}" />
                                </div>
                                <span class="form-text text-muted">Please enter facebook url</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">Skype:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-skype"></i>
                                        </span>
                                    </div>
                                    <input id="skype_url" name="skype_url" type="text" class="form-control"
                                        value="{{ $company->skype_url }}" />
                                </div>
                                <span class="form-text text-muted">Please enter skype url</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">Twitter:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-twitter"></i>
                                        </span>
                                    </div>
                                    <input id="twitter_url" name="twitter_url" type="text" class="form-control"
                                        value="{{ $company->twitter_url }}" />
                                </div>
                                <span class="form-text text-muted">Please enter twitter_url</span>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group row">
                            <label class="col-lg-1 col-form-label text-lg-right">linkedin:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-linkedin"></i>
                                        </span>
                                    </div>
                                    <input id="linkedin_url" name="linkedin_url" type="text" class="form-control"
                                        value="{{ $company->linkedin_url }}" />
                                </div>
                                <span class="form-text text-muted">Please enter linkedin url</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">Instagram</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-instagram"></i>
                                        </span>
                                    </div>
                                    <input id="instagram_url" name="instagram_url" type="text" class="form-control"
                                        value="{{ $company->instagram_url }}" />
                                </div>
                                <span class="form-text text-muted">Please enter instagram url</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">youtube:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-youtube"></i>
                                        </span>
                                    </div>
                                    <input id="youtube_url" name="youtube_url" type="text" class="form-control"
                                        value="{{ $company->youtube_urlt }}" />
                                </div>
                                <span class="form-text text-muted">Please enter youtube url</span>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group row">
                            <label class="col-lg-1 col-form-label text-lg-right">Google+:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-google-plus"></i>
                                        </span>
                                    </div>
                                    <input id="googleplus_url" name="googleplus_url" type="text" class="form-control"
                                        value="{{ $company->googleplus_url }}" />
                                </div>
                                <span class="form-text text-muted">Please enter googleplus_url</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">Pinterest:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="la la-pinterest"></i>
                                        </span>
                                    </div>
                                    <input id="Pinterest_url" name="Pinterest_url" type="text" class="form-control"
                                        value="{{ $company->Pinterest_url }}" />
                                </div>
                                <span class="form-text text-muted">Please enter Pinterest url</span>
                            </div>

                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-7">
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
@endsection

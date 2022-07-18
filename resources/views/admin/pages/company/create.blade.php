@extends('admin.layout.adminLayout')
@section('content')
    {{-- <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->

            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

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
                <div class="card card-custom card-sticky" id="kt_page_sticky_card">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">
                                All Companies data <i class="mr-2"></i>
                                <small class="">try to scroll the page</small>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <a href="{{url('company-list')}}" class="btn btn-light-primary font-weight-bolder mr-2">
                                <i class="ki ki-long-arrow-back icon-sm"></i>
                                Back
                            </a>
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary font-weight-bolder">
                                    <i class="ki ki-check icon-sm"></i>
                                    Save Form
                                </button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <ul class="nav nav-hover flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon flaticon2-reload"></i>
                                                <span class="nav-text">Save & continue</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon flaticon2-add-1"></i>
                                                <span class="nav-text">Save & add new</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class="nav-icon flaticon2-power"></i>
                                                <span class="nav-text">Save & exit</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin::Form-->
                        <form class="form" action="{{ url('add-company') }}" method="POST" id="kt_form">
                            @csrf
                            <div class="row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-8">
                                    <div class="my-5">
                                        <h3 class=" text-dark font-weight-bold mb-10">Company Info:</h3>
                                        <div class="form-group row">
                                            <label class="col-3">Company Name</label>
                                            <div class="col-9">
                                                <input id="company_name" name="company_name"
                                                    class="form-control form-control-solid" type="text"
                                                    value="Loop Inc." />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3">Primary contact</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-solid" id="primary_contact"
                                                    name="primary_contact" type="text" value="Loop Inc." />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3">company Email</label>
                                            <div class="col-9">
                                                <input name="email" id="email" class="form-control form-control-solid"
                                                    id="primary_contact" name="primary_contact" type="email" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3">Website url</label>
                                            <div class="col-9">
                                                <input name="website_url" id="website_url"
                                                    class="form-control form-control-solid"
                                                    name="primary_contact" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3">company_phone</label>
                                            <div class="col-9">
                                                <input name="company_phone" id="company_phone"
                                                    class="form-control form-control-solid" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3">vat_number</label>
                                            <div class="col-9">
                                                <input name="vat_number" id="vat_number"
                                                    class="form-control form-control-solid" type="text" />
                                            </div>
                                        </div>
                                        <div class="separator separator-dashed my-10"></div>
                                        <div class="my-5">
                                            <h3 class=" text-dark font-weight-bold mb-10">Social media Details:</h3>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3">facebook_url</label>
                                            <div class="col-9">
                                                <input name="facebook_url" id="facebook_url"
                                                    class="form-control form-control-solid" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3">twitter_url</label>
                                            <div class="col-9">
                                                <input name="twitter_url" id="twitter_url"
                                                    class="form-control form-control-solid" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3">skype_url</label>
                                            <div class="col-9">
                                                <input name="skype_url" id="skype_url"
                                                    class="form-control form-control-solid" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3">linkedin_url</label>
                                            <div class="col-9">
                                                <input name="linkedin_url" id="linkedin_url"
                                                    class="form-control form-control-solid" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3">youtube_url</label>
                                            <div class="col-9">
                                                <input name="youtube_url" id="youtube_url"
                                                    class="form-control form-control-solid" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3">googleplus</label>
                                            <div class="col-9">
                                                <input name="googleplus" id="googleplus"
                                                    class="form-control form-control-solid" type="text" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-3">Pinterest_url</label>
                                            <div class="col-9">
                                                <input name="Pinterest_url" id="Pinterest_url"
                                                    class="form-control form-control-solid" type="text" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separator separator-dashed my-10"></div>
                                    <div class="my-5">
                                        <h3 class=" text-dark font-weight-bold mb-10">Address Details:</h3>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">country</label>
                                        <div class="col-9">
                                            <input name="country" id="country" class="form-control form-control-solid"
                                                type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">State</label>
                                        <div class="col-9">
                                            <input name="state" id="state" class="form-control form-control-solid"
                                                type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">city</label>
                                        <div class="col-9">
                                            <input name="city" id="city" class="form-control form-control-solid"
                                                type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">zip_code</label>
                                        <div class="col-9">
                                            <input name="zip_code" id="zip_code" class="form-control form-control-solid"
                                                type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-3">address</label>
                                        <div class="col-9">
                                            <input name="address" id="address" class="form-control form-control-solid"
                                                type="text" />
                                        </div>
                                    </div>
                                    <div class="separator separator-dashed my-10"></div>
                                </div>
                                <div class="col-xl-2"></div>
                            </div>
                            <button type="submit" class="btn btn-primary font-weight-bolder">
                                <i class="ki ki-check icon-sm"></i>
                                Save Form
                            </button>
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

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
                    <h3 class="card-title">Fill the Form to add new company</h3>
                    {{-- <div class="card-toolbar">
                        <div class="example-tools justify-content-center">
                            <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                            <span class="example-copy" data-toggle="tooltip" title="Copy code"></span>
                        </div>
                    </div> --}}
                </div>
                <!--begin::Form-->
                <form class="form" action="{{ url('add-company') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="my-5">
                            <h3 class=" text-dark font-weight-bold mb-10">Personal Details:</h3>
                        </div>
                        <div class="form-group row mt-3">
                            <label class="col-lg-1 col-form-label text-lg-right">Name:</label>
                            <div class="col-lg-3">
                                <input id="company_name" name="company_name" type="text" class="form-control" placeholder="company Name" />
                                <span class="form-text text-muted">Please enter your company name</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">primary contact:</label>
                            <div class="col-lg-3">
                                <input id="primary_contact" name="primary_contact" type="text" class="form-control" placeholder="primary contact" />
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
                                    <input id="company_email" name="company_email" type="email" class="form-control" placeholder="Enter your email" />
                                </div>
                                <span class="form-text text-muted">Please enter company email</span>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="form-group row">
                            <label class="col-lg-1 col-form-label text-lg-right">website:</label>
                            <div class="col-lg-3">
                                <input id="website_url" name="website_url" type="text" class="form-control" placeholder="Enter Website url" />
                                <span class="form-text text-muted">Please enter website url</span>
                            </div>
                            <label class="col-lg-1 col-form-label text-lg-right">Phone:</label>
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <input id="company_phone" name="company_phone" type="phone" class="form-control" placeholder="Phone number"/>
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
                                    <input id="vat_number" name="vat_number" type="text" class="form-control" placeholder="Enter vat number" />
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-info-circle"></i>
                                        </span>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Please enter your Vat number</span>
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
                                    <input id="country" name="country" type="text" class="form-control" placeholder="Enter your country" />
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
                                    <input id="city" name="city" type="text" class="form-control" placeholder="Enter your city" />
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
                                    <input id="state" name="state" type="text" class="form-control" placeholder="Enter state/provence" />
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
                                    <input id="zip_code" name="zip_code" type="text" class="form-control" placeholder="Enter your zip code" />
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
                                    <input id="address" name="address" type="text" class="form-control" placeholder="Enter your Address" />
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
                                    <input id="facebook_url" name="facebook_url" type="text" class="form-control" placeholder="Enter your facebook url" />
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
                                    <input id="skype_url" name="skype_url" type="text" class="form-control" placeholder="Enter your skype url" />
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
                                    <input id="twitter_url" name="twitter_url" type="text" class="form-control" placeholder="Enter your twitter url" />
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
                                    <input id="linkedin_url" name="linkedin_url" type="text" class="form-control" placeholder="Enter your linkedin url" />
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
                                    <input id="instagram_url" name="instagram_url" type="text" class="form-control" placeholder="Enter your instagram url" />
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
                                    <input id="youtube_url" name="youtube_url" type="text" class="form-control" placeholder="Enter your youtube url" />
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
                                    <input id="googleplus_url" name="googleplus_url" type="text" class="form-control" placeholder="Enter your googleplus url" />
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
                                    <input id="Pinterest_url" name="Pinterest_url" type="text" class="form-control" placeholder="Enter your instagram url" />
                                </div>
                                <span class="form-text text-muted">Please enter Pinterest url</span>
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
@endsection

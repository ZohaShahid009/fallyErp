@extends('admin.layout.adminLayout')
@section('content')

    <div class="d-flex flex-column flex-root">
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
    </div>
@endsection

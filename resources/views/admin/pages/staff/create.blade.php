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

            <form method="POST" action="{{url('add-staff')}}" class="form" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="separator separator-solid my-10"></div>
                    <div class="my-5">
                        <h3 class=" text-dark font-weight-bold mb-10">Staff Details:</h3>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>First Name:</label>
                            <input name="first_name" id="first_name" type="text" class="form-control" placeholder="Enter last name" />
                            <span class="form-text text-muted">Please enter your first name</span>
                        </div>
                        <div class="col-lg-4">
                            <label>Last Name:</label>
                            <input name="last_name" id="last_name" type="text" class="form-control" placeholder="Enter last name" />
                            <span class="form-text text-muted">Please enter your last name</span>
                        </div>
                        <div class="col-lg-4">
                            <label>Email:</label>
                            <input id="email" name="email" type="email" class="form-control" placeholder="Enter email" />
                            <span class="form-text text-muted">Please enter your email</span>
                        </div>
                        <div class="col-lg-5">
                            <label>hourly_rate:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i
                                            class="la la-user"></i></span></div>
                                <input name="hourly_rate" id="hourly_rate" type="text" class="form-control" placeholder="" />
                            </div>
                            <span class="form-text text-muted">Please enter your hourly rate</span>
                        </div>
                        <div class="col-lg-5">
                            <label>Contact:</label>
                            <input id="phone" name="phone" type="phone" class="form-control" placeholder="Enter phone number" />
                            <span class="form-text text-muted">Please enter your phone</span>
                        </div>
                    </div>
                    <div class="separator separator-solid my-10"></div>
                    <div class="my-5">
                        <h3 class=" text-dark font-weight-bold mb-10">Social Media Details:</h3>
                    </div>
                    <div class="form-group row">

                        <div class="col-lg-5">
                            <label>facebook url:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i
                                            class="la la-info-circle"></i></span></div>
                                <input id="facebook_url" name="facebook_url" type="text" class="form-control" placeholder="facebook_url" />
                            </div>
                            <span class="form-text text-muted">Please enter facebook url</span>
                        </div>
                        <div class="col-lg-5">
                            <label>linkedin url:</label>
                            <div class="input-group">
                                <input id="linkedin_url" name="linkedin_url" type="text" class="form-control" placeholder="Enter your linkedin url" />
                                <div class="input-group-append"><span class="input-group-text"><i
                                            class="la la-map-marker"></i></span></div>
                            </div>
                            <span class="form-text text-muted">Please enter linkedin url</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-5">
                            <label>skype url:</label>
                            <div class="input-group">
                                <div class="input-group-append"><span class="input-group-text"><i
                                            class="la la-bookmark-o"></i></span></div>
                                <input id="skype_url" name="skype_url" type="text" class="form-control" placeholder="Enter your skype url" />
                            </div>
                            <span class="form-text text-muted">Please enter your skype url</span>
                        </div>

                    </div>
                    <div class="separator separator-solid my-10"></div>
                    <div class="my-5">
                        <h3 class=" text-dark font-weight-bold mb-10">Employement Details:</h3>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label>language id:</label>
                            <input id="language_id" name="language_id" type="text" class="form-control" placeholder="Enter language id" />
                            <span class="form-text text-muted">Please enter language id</span>
                        </div>
                        <div class="col-lg-4">
                            <label>diraction id:</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i
                                            class="la la-info-circle"></i></span></div>
                                <input id="diraction_id" name="diraction_id" type="text" class="form-control" placeholder="diraction id" />
                            </div>
                            <span class="form-text text-muted">Please enter diraction id</span>
                        </div>
                        <div class="col-lg-4">
                            <label>department id:</label>
                            <div class="input-group">
                                <input id="department_id" name="department_id" type="text" class="form-control" placeholder="Enter your department_id" />
                                <div class="input-group-append"><span class="input-group-text"><i
                                            class="la la-map-marker"></i></span></div>
                            </div>
                            <span class="form-text text-muted">Please enter department_id</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        {{-- <div class="col-lg-4">
                            <label>Email signature:</label>
                            <div class="input-group">
                                <div class="input-group-append"><span class="input-group-text"><i
                                            class="la la-bookmark-o"></i></span></div>
                                <textarea id="email_signature" name="email_signature" type="text" class="form-control" rows="4" placeholder="" />
                            </div>
                            <span class="form-text text-muted">Please enter your skype url</span>
                        </div> --}}
                        <div class="col-lg-4">
                            <label>is administrator?:</label>
                            <div class="radio-inline">
                                <label class="radio radio-solid">
                                    <input name="is_administrator" id="is_administrator" type="radio" name="example_2" checked="checked" value="yes" />
                                    <span></span>
                                    yes
                                </label>
                                <label class="radio radio-solid">
                                    <input id="is_administrator" name="is_administrator" type="radio" name="example_2" value="no" />
                                    <span></span>
                                    no
                                </label>
                            </div>
                            <span class="form-text text-muted">Please select user group</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Email signature:</label>
                            <div class="input-group">
                                <div class="input-group-append"><span class="input-group-text"><i
                                            class="la la-bookmark-o"></i></span></div>
                                <textarea id="email_signature" name="email_signature" type="text" class="form-control" rows="4" placeholder="Enter your Email Signature"> </textarea>
                            </div>
                            <span class="form-text text-muted"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-5">
                            <label>Password:</label>
                            <input name="password" id="password" type="password" class="form-control" placeholder="Enter Password" />
                            <span class="form-text text-muted">Please set Password</span>
                        </div>
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
            </form>
        </div>
    </div>
    </div>
@endsection

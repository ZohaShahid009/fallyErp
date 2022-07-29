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
                    {{-- zoha --}}
                    <form method="POST" action="{{ url('add-email') }}" class="form" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="separator separator-solid my-10"></div>
                            <div class="my-5">
                                <h3 class=" text-dark font-weight-bold mb-10">Email Settings:</h3>
                            </div>
                            <div class="form-group row">
                                {{-- <div class="col-lg-6">
                                    <label>Tittle</label>
                                    <input name="tittle" id="Tittle" type="text" class="form-control" />
                                </div> --}}

                                <div class="col-lg-6">
                                    <label>Smtp Protocol</label>
                                    <select class="form-control" name="smtp_protocol">
                                        <option value="">
                                            Please select...</option>
                                        <option selected value="1">
                                            SMTP
                                        </option>
                                        <option value="2">
                                            mail
                                        </option>
                                        <option value="3">
                                           send mail
                                        </option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label>Smtp Host:</label>
                                    <input name="smtp_host" id="smtp_host" type="text" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Smtp Username</label>
                                    <input name="smtp_username" id="smtp_username" type="text" class="form-control" />

                                </div>
                                <div class="col-lg-6">
                                    <label>Smtp Password</label>
                                    <input name="smtp_password" id="smtp_password" class="form-control" type="password" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Smtp Port</label>
                                    <input name="smtp_port" id="smtp_port"  class="form-control" />
                                </div>
                                <div class="col-lg-6">
                                    <label>Smtp Security</label>
                                    <input name="smtp_security" id="smtp_security" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Connection Timeout</label>
                                    <input name="connection_timeout" id="connection_timeout" type="time" class="form-control" />
                                </div>
                                <div class="col-lg-6">
                                    <label>Debug Mode</label>
                                    <input name="debug_mode" id="debug_mode" class="form-control" />
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

@extends('admin.layout.adminLayout')
@section('content')

<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">Facebook Login</h3>
                            </div>
                            <!--begin::Form-->
                            <form class="form">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-3 col-sm-12">Activation</label>
                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                            <input data-switch="true" type="checkbox" checked="checked" data-on-text="ON" data-off-text="Off" data-on-color="primary" />

                                        </div>
                                    </div>
                                    {{-- zoha1 --}}
                                    <div class="form-group">
                                        <label>App ID:</label>
                                        <input type="App ID" class="form-control" placeholder="App ID" />

                                    </div>
                                    {{-- zoha2 --}}

                                <div class="form-group">
                                    <label>APP Secreat:</label>
                                    <input type="text" class="form-control" placeholder="App Secreat:">
                                </div>
                                {{--  <div class="form-group row">
                                                    <label class="col-form-label  col-lg-3 col-sm-12">Sandbox Activation</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <input data-switch="true" type="checkbox" checked="checked" data-on-text="ON" data-off-text="Off" data-on-color="primary" />

                                                    </div>
                                                </div>  --}}
                            </div>
                            {{-- zoha3 --}}
                                <div class="card-footer">
                                    <button type="reset" class="btn btn-primary mr-2">Update</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">Google Login</h3>
                            </div>
                            <!--begin::Form-->
                            <form class="form">
                                <div class="card-body">
                                <!-- rff -->
                                <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Activation</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input data-switch="true" type="checkbox" checked="checked" data-on-text="ON" data-off-text="Off" data-on-color="primary" />

														</div>
													</div>
                    <!-- rff end -->

                                    {{--  <div class="form-group">
                                        <label>GOOGLE CLIENT ID:</label>
                                        <input type="password class="form-control" placeholder="GOOGLE CLIENT ID" />
                                    </div>  --}}
                                    <div class="form-group">
                                        <label>GOOGLE CLIENT ID:</label>
                                        <input type="App ID" class="form-control" placeholder="App ID" />

                                    </div>
                                    <div class="form-group">
                                        <label>GOOGLE CLIENT  Secret:</label>
                                        <input type="Password" class="form-control" placeholder="GOOGLE CLIENT  Secret:">
                                    </div>


                                </div>
                                <div class="card-footer">
                                    <button type="reset" class="btn btn-primary mr-2">Update</button>

                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
             {{-- zoha max --}}
             <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">Linkedin Login</h3>
                            </div>
                            <!--begin::Form-->
                            <form class="form">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-form-label text-right col-lg-3 col-sm-12">Activation</label>
                                        <div class="col-lg-9 col-md-9 col-sm-12">
                                            <input data-switch="true" type="checkbox" checked="checked" data-on-text="ON" data-off-text="Off" data-on-color="primary" />

                                        </div>
                                    </div>
                                    {{-- zoha1 --}}
                                    <div class="form-group">
                                        <label>Linkedin Client ID:</label>
                                        <input type="number" class="form-control" placeholder="12345678" />

                                    </div>
                                    {{-- zoha2 --}}

                                <div class="form-group">
                                    <label>Linkedin Client Secret:</label>
                                    <input type="Password" class="form-control" placeholder="Linkedin Client Secret:">
                                </div>

                            </div>
                            {{-- zoha3 --}}
                                <div class="card-footer">
                                    <button type="reset" class="btn btn-primary mr-2">Update</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">Facebook Chat</h3>
                            </div>
                            <!--begin::Form-->
                            <form class="form">
                                <div class="card-body">


                                <!-- rff -->
                                <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Activation</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input data-switch="true" type="checkbox" checked="checked" data-on-text="ON" data-off-text="Off" data-on-color="primary" />

														</div>
													</div>
                    <!-- rff end -->

                                    <div class="form-group">
                                        <label>Facebook Page Id:</label>
                                        <input type="number" class="form-control" placeholder="12345678" />




													</div>
                                </div>
                                <div class="card-footer">
                                    <button type="reset" class="btn btn-primary mr-2">Update</button>

                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


@endsection
in::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="assets/js/pages/crud/forms/widgets/bootstrap-switch.js"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->

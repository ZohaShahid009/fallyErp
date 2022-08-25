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
                                <h3 class="card-title">paypal configuration</h3>
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
                                        <label>Payment Client ID:</label>
                                        <input type="Client_ID" class="form-control" placeholder="Payment Client ID" />

                                    </div>
                                    {{-- zoha2 --}}

                                <div class="form-group">
                                    <label>Payment Client Secret:</label>
                                    <input type="Password" class="form-control" placeholder="Payment Client Secret:">
                                </div>
                                <div class="form-group row">
                                                    <label class="col-form-label  col-lg-3 col-sm-12">Sandbox Activation</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <input data-switch="true" type="checkbox" checked="checked" data-on-text="ON" data-off-text="Off" data-on-color="primary" />

                                                    </div>
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
                                <h3 class="card-title">Stripe configuration</h3>
                            </div>
                            <!--begin::Form-->
                            <form class="form" action="{{ url('updatepayment', $subscriptions->id )}}" method="POST"
                                enctype="multipart/form-data"> @csrf
                               <div class="card-body">
                                     <div class="form-group">
                                        <label>Payment Client ID:</label>
                                        <input type="user_id" class="form-control" name="user_id" placeholder="Payment Client ID"
                                        value={{$subscriptions->user_id}}>
                                    </div>
                                 <div class="form-group">
                                        <label>Payment Client Secret:</label>
                                        <input type="stripe_id" class="form-control" placeholder="Payment Client Secret:"
                                        value={{$subscriptions->stripe_id }}>
                                    </div>
                                             <div class="form-group row">
                                                    <div class="col-lg-12">
                                                        <label>Status</label>
                                                        <select class="form-control" name="stripe_status">
                                                             {{$subscriptions->stripe_status}}
                                                                <option value="active">Active</option>
                                                                <option value="Inactive">Inactive</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                                </div>
                               </div>
                            </form>
                        </div>
                    </div>

                            <!--end::Form-->
                </div>
            </div>
        </div>
             {{-- zoha max  3rd 4th form--}}
             {{--  <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">paypal configuration</h3>
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
                                    {{--  <div class="form-group">
                                        <label>Payment Client ID:</label>
                                        <input type="Client_ID" class="form-control" placeholder="Payment Client ID" />

                                    </div>  --}}
                                    {{-- zoha2 --}}

                                {{--  <div class="form-group">
                                    <label>Payment Client Secret:</label>
                                    <input type="Password" class="form-control" placeholder="Payment Client Secret:">
                                </div>
                                <div class="form-group row">
                                                    <label class="col-form-label  col-lg-3 col-sm-12">Sandbox Activation</label>
                                                    <div class="col-lg-9 col-md-9 col-sm-12">
                                                        <input data-switch="true" type="checkbox" checked="checked" data-on-text="ON" data-off-text="Off" data-on-color="primary" />

                                                    </div>
                                                </div>
                            </div>  --}}
                            {{-- zoha3 --}}
                                {{--  <div class="card-footer">
                                    <button type="reset" class="btn btn-primary mr-2">Update</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>  --}}
                    {{--  <div class="col-md-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">Stripe configuration</h3>
                            </div>  --}}
                            <!--begin::Form-->
                            {{--  <form class="form">
                                <div class="card-body">


                                <!-- rff -->
                                <div class="form-group row">
														<label class="col-form-label text-right col-lg-3 col-sm-12">Activation</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input data-switch="true" type="checkbox" checked="checked" data-on-text="ON" data-off-text="Off" data-on-color="primary" />

														</div>
													</div>  --}}
                    <!-- rff end -->

                                    {{--  <div class="form-group">
                                        <label>Payment Client ID:</label>
                                        <input type="Client_ID" class="form-control" placeholder="Payment Client ID" />

                                    </div>
                                    <div class="form-group">
                                        <label>Payment Client Secret:</label>
                                        <input type="Password" class="form-control" placeholder="Payment Client Secret:">
                                    </div>
                                    <div class="form-group row">
														<label class="col-form-label  col-lg-3 col-sm-12">Sandbox Activation</label>
														<div class="col-lg-9 col-md-9 col-sm-12">
															<input data-switch="true" type="checkbox" checked="checked" data-on-text="ON" data-off-text="Off" data-on-color="primary" />

														</div>
													</div>
                                </div>
                                <div class="card-footer">
                                    <button type="reset" class="btn btn-primary mr-2">Update</button>

                                </div>
                            </form>  --}}
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
            </div>  --}}


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

@extends('admin.layout.adminLayout')
@section('content')
    <!--begin::Subheader-->

    <!--end::Subheader-->
    <div class="content d-flex flex-column flex-column-fluid wrapper" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-chart text-primary"></i>
                            </span>
                            <h4 class="card-label">Pricing Table</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center text-center my-0 my-md-25">
                            <!-- begin: Pricing-->
                            @if ($basic)
                                <div class="col-md-4 col-xxl-3 bg-white rounded-left shadow-sm">
                                    <div class="pt-25 pb-25 pb-md-10 px-4">
                                        <h4 class="mb-15">Basic</h4>
                                        <div class="pricing-price"><span
                                                class="pricing-currency">£</span>{{ $basic->price / 100 }}
                                            <span class="pricing-period">/ Basic</span>
                                        </div>
                                        {{-- <h4 class="mb-15">Basic</h4>
                                <span class="px-7 py-3 font-size-h1 font-weight-bold d-inline-flex flex-center bg-primary-o-10 rounded-lg mb-15">Free</span> --}}
                                        <br />
                                        <p class="mb-10 d-flex flex-column text-dark-50">
                                            <span>5GB Disk Space</span>
                                            <span>10 Domain Names</span>
                                            <span>5 E-Mail Address</span>
                                            <span>Fully Support</span>
                                        </p>
                                        <style>
                                            .plan1 {
                                                color: #fff;
                                            }

                                            .plan1:hover {
                                                color: #fff;
                                            }
                                        </style>
                                        <button type="button"
                                            class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3"> <a
                                                class="plan1" href="{{ route('plans.checkout', $basic->plan_id) }}"
                                                class="pricing-action l-amber">Choose plan</a></button>
                                    </div>
                                </div>
                            @endif
                            <!-- end: Pricing-->
                            <!-- begin: Pricing-->
                            @if ($professional)
                                <div class="col-md-4 col-xxl-3 bg-primary my-md-n15 rounded shadow-sm">
                                    <div class="pt-25 pt-md-37 pb-25 pb-md-10 py-md-28 px-4">
                                        <h4 class="text-white mb-15">Professional</h4>
                                        <span
                                            class="px-7 py-3 bg-white d-inline-flex flex-center rounded-lg mb-15 bg-white">
                                            <span class="pr-2 text-primary opacity-70">$</span>
                                            {{-- <div><span class="pr-2 font-size-h1 font-weight-bold text-primary">£ {{ $professional->price/100 }}</span></div> --}}
                                            <div class="pricing-price"><span
                                                    class="pricing-currency">£</span>{{ $professional->price / 100 }}
                                                <span class="pricing-period">/Professional</span>
                                            </div>
                                            {{-- <span class="text-primary opacity-70">/&#160;&#160;Per Installation</span> --}}
                                        </span>

                                        <p class="text-white mb-10 d-flex flex-column">
                                            <span>10GB Disk Space</span>
                                            <span>0 Domain Names</span>
                                            <span>10 E-Mail Address</span>
                                            <span>Fully Support</span>
                                        </p>
                                        <button type="button"
                                            class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3"> <a
                                                class="plan1" href="{{ route('plans.checkout', $professional->plan_id) }}"
                                                class="pricing-action l-amber">Choose plan</a></button>
                                        {{-- <button type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3"> Choose plan<a href="{{ route('plans.checkout', $professional->plan_id) }}"></button></a> --}}
                                    </div>
                                </div>
                            @endif

                            <!-- end: Pricing-->
                            <!-- begin: Pricing-->
                            @if ($enterprise)
                                <div class="col-md-4 col-xxl-3 bg-white rounded-right shadow-sm">
                                    <div class="pt-25 pb-25 pb-md-10 px-4">
                                        <h4 class="mb-15">Extended</h4>
                                        <span class="px-7 py-3 d-inline-flex flex-center rounded-lg mb-15 bg-primary-o-10">
                                            <span class="pr-2 opacity-70">$</span>
                                            <div class="pricing-price"><span
                                                    class="pricing-currency">£</span>{{ $enterprise->price / 100 }}
                                                <span class="pricing-period">/ mo</span>
                                            </div>
                                            {{-- <span class="pr-2 font-size-h1 font-weight-bold">99</span>
                                    <span class="opacity-70">/&#160;&#160;Per Installation</span> --}}
                                        </span>
                                        <br />
                                        <p class="mb-10 d-flex flex-column text-dark-50">
                                            <span>50GB Disk Space</span>
                                            <span>50 Domain Names</span>
                                            <span>20 E-Mail Addressa</span>
                                            <span>Fully Support</span>
                                        </p>
                                        <button type="button"
                                            class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3"> <a
                                                class="plan1" href="{{ route('plans.checkout', $enterprise->plan_id) }}"
                                                class="pricing-action l-amber">Choose plan</a></button>
                                        {{-- <button type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Purchase</button> --}}
                                    </div>
                                </div>
                            @endif
                            <!-- end: Pricing-->
                        </div>
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
    </div>
@endsection

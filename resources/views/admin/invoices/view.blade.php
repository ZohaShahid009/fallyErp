@extends('admin.layout.adminLayout')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid wrapper" id="kt_content">
        <!--begin::Subheader-->

        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!-- begin::Card-->
                <div class="card card-custom overflow-hidden">
                    <div class="card-body p-0">
                        <!-- begin: Invoice-->
                        <!-- begin: Invoice header-->
                        <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0"
                            style="background-image: url({{ asset('/') }}assets/media/bg/bg-6.jpg);">
                            <div class="col-md-9">
                                <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                    <h1 class="display-4 text-white font-weight-boldest mb-10">INVOICE</h1>
                                    <div class="d-flex flex-column align-items-md-end px-0">
                                        <!--begin::Logo-->
                                        <a href="#" class="mb-5">
                                            <img src="{{ asset('/') }}assets/media/logos/logo-light.png" alt="">
                                        </a>
                                        <!--end::Logo-->
                                        <span class="text-white d-flex flex-column align-items-md-end opacity-70">
                                            <span>Cecilia Chapman, 711-2880 Nulla St, Mankato</span>
                                            <span>Mississippi 96522</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="border-bottom w-100 opacity-20"></div>
                                <div class="d-flex justify-content-between text-white pt-6">
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolde mb-2r">DATA</span>
                                        <span class="opacity-70">{{ $invoice->invoice_date }}</span>
                                    </div>
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolde mb-2r">Due DATA</span>
                                        <span class="opacity-70">{{ $invoice->due_date }}</span>
                                    </div>
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">INVOICE NO.</span>
                                        <span class="opacity-70">{{ $invoice->invoice_number }}</span>
                                    </div>
                                    <div class="d-flex flex-column flex-root">
                                        <span class="font-weight-bolder mb-2">INVOICE TO.</span>
                                        <span class="opacity-70">{{ $invoice->client->company_name }},
                                            {{ $invoice->client->company_phone }}.
                                            <br>{{ $invoice->client->company_city }} {{ $invoice->client->zip_code }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: Invoice header-->
                        <!-- begin: Invoice body-->
                        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                            <div class="col-md-9">
                                <div class="table-responsive">
                                    <table class="table" id="tab_logic">
                                        <thead>
                                            <tr>
                                                <th class="pl-0 font-weight-bold text-muted text-uppercase">Item</th>
                                                <th class="text-right font-weight-bold text-muted text-uppercase">Qty</th>
                                                <th class="text-right font-weight-bold text-muted text-uppercase">Price</th>
                                                <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">
                                                    Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product as $products)
                                                <tr class="font-weight-boldest font-size-lg">
                                                    <td class="pl-0 pt-7">{{ $products->item_name }}</td>
                                                    <td class="text-right pt-7">{{ $products->quantity }}</td>
                                                    <td class="text-right pt-7">${{ $products->unit_cost }}.00</td>
                                                    <td class="text-danger pr-0 pt-7 text-right">
                                                        ${{ $products->line_total }}.00</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end: Invoice body-->
                        <!-- begin: Invoice footer-->
                        <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">
                            <div class="col-md-9">
                                <div class="d-flex justify-content-between flex-column flex-md-row font-size-lg">
                                    <div class="d-flex flex-column mb-10 mb-md-0">
                                        <div class="font-weight-bolder font-size-lg mb-3">BANK TRANSFER</div>
                                        <div class="d-flex justify-content-between mb-3">
                                            <span class="mr-15 font-weight-bold">Account Name:</span>
                                            <span class="text-right">Barclays UK</span>
                                        </div>
                                        <div class="d-flex justify-content-between mb-3">
                                            <span class="mr-15 font-weight-bold">Account Number:</span>
                                            <span class="text-right">1234567890934</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span class="mr-15 font-weight-bold">Code:</span>
                                            <span class="text-right">BARC0032UK</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column text-md-right">
                                        <span class="font-size-lg font-weight-bolder mb-1">TOTAL AMOUNT</span>
                                        <span
                                            class="font-size-h2 font-weight-boldest text-danger mb-1">${{ $invoice->amount }}</span>
                                        <span>Taxes Included</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end: Invoice footer-->
                        <!-- begin: Invoice action-->
                        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                            <div class="col-md-9">
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-light-primary font-weight-bold"
                                        onclick="window.print();">Download Invoice</button>
                                    <button type="button" class="btn btn-primary font-weight-bold"
                                        onclick="window.print();">Print Invoice</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: Invoice action-->
                <!-- end: Invoice-->
            </div>
        </div>
        <!-- end::Card-->
    </div>
    <!--end::Container-->
    </div>
    </div>
@endsection

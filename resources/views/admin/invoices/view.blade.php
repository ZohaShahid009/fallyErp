@extends('admin.layout.adminLayout')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid wrapper" id="kt_content">

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!-- begin::Card-->
                <div class="card card-custom ribbon ribbon-clip ribbon-left">
                    <div class="ribbon-target" style="top: 12px;">
                        @php
                            $status = $invoice->status;
                        @endphp
                        @if ($status == 0)
                            <span class="ribbon-inner bg-dark"></span>draft
                        @elseif ($status == 1)
                            <span class="ribbon-inner bg-primary"></span>sent
                        @elseif ($status == 2)
                            <span class="ribbon-inner bg-danger"></span>Not
                            Paid
                        @elseif ($status == 3)
                            <span class="ribbon-inner bg-info"></span>Partially Paid
                        @elseif ($status == 4)
                            <span class="ribbon-inner bg-success"></span>Fully Paid
                        @elseif ($status == 5)
                            <span class="ribbon-inner bg-danger"></span>Over Due
                        @elseif ($status == 6)
                            <span class="ribbon-inner bg-warning"></span>Paid Late
                        @endif

                    </div>
                    <div class="card-body overflow-hidden p-0">
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
                                        <div class="d-flex flex-column mb-10 mb-md-0">
                                            <div class="d-flex justify-content-between mb-3">
                                                <span class="mr-20 font-weight-bold">Discount(%):</span>
                                                <span
                                                    class="text-right text-danger font-weight-boldest">{{ number_format($invoice->discount, 2) }}%</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3">
                                                <span class="mr-20 font-weight-bold">Total:</span>
                                                <span
                                                    class="text-right text-danger font-weight-boldest">${{ $invoice->amount }}</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3">
                                                <span class="mr-30 font-weight-bold">Paid Amount:</span>
                                                <span
                                                    class="text-right text-danger font-weight-boldest">${{ $invoice->deposit_amount }}.00</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pt-10 mb-1">
                                            <span class="font-size-h2 font-weight-bolder mb-1">TOTAL DUE:</span>
                                            <span
                                                class="font-size-h2 font-weight-boldest text-danger mb-1">${{ number_format($invoice->balance, 2) }}</span>
                                        </div>
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

        {{-- Payment table start --}}
        <div class="d-flex flex-column-fluid mt-5">

            <!--begin::Container-->
            <div class="container-fluid">
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Received Payments
                        </div>
                        <div class="card-toolbar">
                            <a href="{{ url('create/invoice/payment') }}" class="btn btn-primary font-weight-bolder">
                                <span class="svg-icon svg-icon-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="9" cy="15" r="6" />
                                            <path
                                                d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>Make Payment</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                            <thead>
                                <tr>
                                    <th>SR#</th>
                                    <th>payment date</th>
                                    <th>Invoice Date</th>
                                    <th>Client</th>
                                    <th>Amount</th>
                                    <th>Payment Method</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($payment as $payments)
                                    <tr></tr>
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $payments->payment_date }}</td>
                                        <td>{{ $payments->invoice->invoice_date }}</td>
                                        <td>{{ $payments->client->company_name }}</td>
                                        <td>{{ $payments->payment_amount }}</td>
                                        <td>{{ $payments->payment_type }}</td>
                                        <td>
                                            <a href="{{ url('view/invoicepayment', $payments->id) }}"
                                                class="btn btn-sm btn-clean btn-icon view_details" id=""
                                                title="View details">
                                                <i class="la la-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
    </div>
    <!--end::Container-->
    </div>
    </div>
@endsection

@extends('admin.layout.adminLayout')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid wrapper" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <!--begin::Notice-->
                        <div class="row">
                            <div class="col-xl-3">
                                <!--begin::Stats Widget 26-->
                                <div class="card card-custom bg-warning gutter-b">
                                    <!--begin::ody-->
                                    <div class="card-body">
                                        <span
                                            class="card-title font-weight-bolder text-dark-75 font-size-h2 mb-0 d-block">${{ $total_outstanding }}.00</span>
                                        <span class="font-weight-boldest text-dark-75 font-size-sm">Total remaining
                                            amount</span>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Stats Widget 26-->
                            </div>
                            <div class="col-xl-3">
                                <!--begin::Stats Widget 30-->
                                <div class="card card-custom bg-info gutter-b">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <span
                                            class="card-title font-weight-bolder text-white font-size-h2 mb-0 d-block">${{ $invoices_total }}.00</span>
                                        <span class="font-weight-bold text-white font-size-sm">Total Invoices
                                            Amount</span>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Stats Widget 30-->
                            </div>
                            <div class="col-xl-3">
                                <!--begin::Stats Widget 31-->
                                <div class="card card-custom bg-danger gutter-b">
                                    <!--begin::Body-->
                                    <div class="card-body">

                                        <span
                                            class="card-title font-weight-bolder text-white font-size-h2 mb-0 d-block">${{ $pastoverdue }}.00</span>
                                        <span class="font-weight-bold text-white font-size-sm">Overdue invoices</span>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Stats Widget 31-->
                            </div>
                            <div class="col-xl-3">
                                <!--begin::Stats Widget 32-->
                                <div class="card card-custom bg-success gutter-b">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <span
                                            class="card-title font-weight-bolder text-light font-size-h2 mb-0 d-block">${{ $invoices_total_paid }}.00</span>
                                        <span class="font-weight-bold text-light font-size-sm">Total Paid
                                            Invoices</span>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Stats Widget 32-->
                            </div>
                        </div>
                        <!--end::Notice-->
                        <!--begin::Card-->
                        <div class="row pt-8 border-top">
                            <div class="col">
                                <div class="d-flex flex-column w-100 mr-2">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <span class="mr-2 font-size-sm font-weight-boldest">Overdue</span>
                                        <span class="text-muted font-size-sm font-weight-bold">{{ $totalstatus5 }} /
                                            {{ $countall }}</span>
                                    </div>
                                    @if ($countall >= 1)
                                        @php
                                            $progress1 = ($totalstatus5 / $countall) * 100;
                                            $progress2 = ($totalstatus4 / $countall) * 100;
                                            $progress3 = ($totalstatus3 / $countall) * 100;
                                            $progress4 = ($totalstatus2 / $countall) * 100;
                                            $progress5 = ($totalstatus0 / $countall) * 100;
                                        @endphp
                                    @else
                                        @php
                                            $progress1 = 0;
                                            $progress2 = 0;
                                            $progress3 = 0;
                                            $progress4 = 0;
                                            $progress5 = 0;
                                        @endphp
                                    @endif
                                    <div class="progress progress-xs w-100">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                            style="width:{{ $progress1 }}%;" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column w-100 mr-2">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <span class="mr-2 font-size-sm font-weight-boldest">Paid</span>
                                        <span class="text-muted font-size-sm font-weight-bold">{{ $totalstatus4 }} /
                                            {{ $countall }}</span>
                                    </div>
                                    <div class="progress progress-xs w-100">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: {{ $progress2 }}%;" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column w-100 mr-2">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <span class="mr-2 font-size-sm font-weight-boldest">Partially Paid</span>
                                        <span class="text-muted font-size-sm font-weight-bold">{{ $totalstatus3 }} /
                                            {{ $countall }}</span>
                                    </div>
                                    <div class="progress progress-xs w-100">
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: {{ $progress3 }}%;" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column w-100 mr-2">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <span class="mr-2 font-size-sm font-weight-boldest">UnPaid</span>
                                        <span class="text-muted font-size-sm font-weight-bold">{{ $totalstatus2 }} /
                                            {{ $countall }}</span>
                                    </div>
                                    <div class="progress progress-xs w-100">
                                        <div class="progress-bar bg-danger" role="progressbar"
                                            style="width: {{ $progress4 }}%;" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column w-100 mr-2">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <span class="mr-2 font-size-sm font-weight-boldest">Draft</span>
                                        <span class="text-muted font-size-sm font-weight-bold">{{ $totalstatus0 }} /
                                            {{ $countall }}</span>
                                    </div>
                                    <div class="progress progress-xs w-100">
                                        <div class="progress-bar bg-dark" role="progressbar"
                                            style="width: {{ $progress5 }}%;" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Invoices:
                                <div class="text-muted pt-2 font-size-sm">List of all invoices</div>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Dropdown-->
                            <div class="dropdown dropdown-inline mr-2">
                                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="svg-icon svg-icon-md">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path
                                                    d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                                    fill="#000000" opacity="0.3" />
                                                <path
                                                    d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                                    fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>Export</button>
                                <!--begin::Dropdown Menu-->
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <!--begin::Navigation-->
                                    <ul class="navi flex-column navi-hover py-2">
                                        <li
                                            class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                                            Choose an option:</li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="la la-print"></i>
                                                </span>
                                                <span class="navi-text">Print</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="la la-copy"></i>
                                                </span>
                                                <span class="navi-text">Copy</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="la la-file-excel-o"></i>
                                                </span>
                                                <span class="navi-text">Excel</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="la la-file-text-o"></i>
                                                </span>
                                                <span class="navi-text">CSV</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="la la-file-pdf-o"></i>
                                                </span>
                                                <span class="navi-text">PDF</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                                <!--end::Dropdown Menu-->
                            </div>
                            <!--end::Dropdown-->
                            <!--begin::Button-->
                            <a href="{{ url('create/invoice/') }}" class="btn btn-primary font-weight-bolder">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
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
                                </span>New Invoice</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>invoice Date</th>
                                    <th>Due Date</th>
                                    <th>Client name</th>
                                    <th>Due Amount</th>
                                    <th>status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoice as $invoices)
                                    <tr>
                                        <td>{{ $invoices->invoice_number }}</td>
                                        <td>{{ $invoices->invoice_date }}</td>
                                        <td> <?php echo date('F d, Y', strtotime($invoices->due_date)); ?>
                                            <?php
                                            $overdue = $invoices->status;
                                            ?>
                                            @if ($overdue == 5)
                                                <span class="label label-danger label-pill label-inline mr-2">
                                                    Overdue
                                                </span>
                                            @endif
                                        </td>
                                        <td>{{ $invoices->client->company_name }}</td>
                                        <td>${{ number_format($invoices->balance, 2) }}</td>
                                        <td>
                                            @php
                                                $status = $invoices->status;
                                            @endphp
                                            @if ($status == 0)
                                                <span class="label label-dark label-inline">Draft</span>
                                            @elseif ($status == 1)
                                                <span class="label label-primary label-inline font-weight-bold">sent</span>
                                            @elseif ($status == 2)
                                                <span class="label label-danger label-pill label-inline">Not
                                                    Paid</span>
                                            @elseif ($status == 3)
                                                <span class="label label-info label-inline">Partially Paid</span>
                                            @elseif ($status == 4)
                                                <span class="label label-success label-pill label-inline">Fully Paid</span>
                                            @elseif ($status == 5)
                                                <span class="label label-danger label-inline">Over Due</span>
                                            @elseif ($status == 6)
                                                <span class="label label-warning label-inline">Paid Late</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('view/invoice', $invoices->id) }}"
                                                class="btn btn-sm btn-clean btn-icon view_details" id=""
                                                title="View details">
                                                <i class="la la-eye"></i>
                                            </a>
                                            <form class="btn btn-sm btn-clean btn-icon" method="POST"
                                                action="{{ route('delete/invoice', $invoices->id) }}">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button
                                                    class="kt_sweetalert_demo_9 btn btn-sm btn-clean btn-icon show_confirm"
                                                    data-toggle="tooltip" type="submit" title='Delete'><i
                                                        class="la la-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection

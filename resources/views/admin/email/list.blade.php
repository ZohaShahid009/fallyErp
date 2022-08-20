@extends('admin.layout.adminLayout')
@section('content')
    <!--begin::Page-->
    <style>
        .detail-tab {
            display: none;
        }
    </style>
    <div class="container-fluid">
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid wrapper" id="kt_content">
            <!--begin::Subheader-->

            <!--end::Subheader-->
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">

                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Notice-->

                    <!--end::Notice-->
                    <!--begin::Card-->
                    <div class="row">
                        <div id="listing-tab" class="col-12">
                            <div class="card card-custom">
                                <div class="card-header flex-wrap py-5">
                                    <div class="card-title">
                                        <h3 class="card-label">Email Themes
                                    </div>
                                    <div class="card-toolbar">
                                        <!--begin::Dropdown-->
                                        <div class="dropdown dropdown-inline mr-2">
                                            <button type="button"
                                                class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="svg-icon svg-icon-md">
                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24" />
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
                                        <a href="{{ url('/theme') }}" class="btn btn-primary font-weight-bolder">
                                            <span class="svg-icon svg-icon-md">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <circle fill="#000000" cx="9" cy="15"
                                                            r="6" />
                                                        <path
                                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                                            fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>New Record</a>
                                        <!--end::Button-->
                                    </div>
                                </div>
                                {{--  rfff for status check  --}}
                                
        @if (Session::has('flash_message_error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('flash_message_error') }}</strong>
        </div>
    @endif
    @if (Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{ session('flash_message_success') }}</strong>
        </div>
    @endif

    <div id="message_success" style="display:none;" class="alert alert-sm alert-success">Status Enabled</div>
    <div id="message_error" style="display:none;" class="alert alert-sm alert-danger">Status Disabled</div>
                                {{--  end for status  --}}
                                <div class="card-body">
                                    <!--begin: Datatable-->
                                    <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                        <thead>
                                            <tr>
                                                <th>SR#</th>
                                                <th>Theme Name</th>
                                                <th>status</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @php
                                                $i = 0;
                                            @endphp
                                            @foreach ($theme as $theme)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $theme->name}}</td>
                                                  
                                                  <td>
                                                    <input type="checkbox" class="BannerStatus btn btn-success" rel="{{$theme->id}}"
                                                    data-toggle="toggle" data-on="Enabled" data-of="Disabled" data-onstyle="success" data-offstyle="danger"
                                                    @if($theme['status']=="1") checked @endif>
                                                    <div id="myElem" style="display:none;" class="alert alert-success">Status Enabled</div>
                                                    </td>

                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                    <!--end: Datatable-->
                                </div>
                            </div>
                        </div>

                        <div id="detail-tab" class="col-4 border" style="display:none">
                        </div>

                        <!--end::Card-->
                    </div>
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
    </div>

  

    <!--end::Content-->
    @endsection
   
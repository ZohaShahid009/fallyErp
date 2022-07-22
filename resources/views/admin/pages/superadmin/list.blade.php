@extends('admin.layout.adminLayout')
@section('content')
    <!--begin::Page-->
    <style>
        .detail-tab {
            display: none;
        }
    </style>
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid wrapper" id="kt_content">
        <!--begin::Subheader-->

        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid">

                <!--begin::Card-->
                <div class="row">
                    <div id="listing-tab" class="col-12">
                        <div class="card card-custom">
                            <div class="card-header flex-wrap py-5">
                                <div class="card-title">
                                    <h3 class="card-label">Super Admin
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
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
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
                                    <a href="{{ url('add-superadmin-form') }}" class="btn btn-primary font-weight-bolder">
                                        <span class="svg-icon svg-icon-md">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <circle fill="#000000" cx="9" cy="15" r="6" />
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
                            <div class="card-body">
                                <!--begin: Datatable-->
                                <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
                                    <thead>
                                        <tr>
                                            <th>SR#</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($superadmin as $superadmins)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $superadmins->name }}</td>
                                                <td>{{ $superadmins->email }}</td>
                                                <td>
                                                    <div class="dropdown dropdown-inline">
                                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon"
                                                            data-toggle="dropdown">
                                                            <i class="la la-cog"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <ul class="nav nav-hoverable flex-column">
                                                                <li class="nav-item"><a class="nav-link"
                                                                        href="{{ url('edit-superadmin', $superadmins->id) }}"><i
                                                                            class="nav-icon la la-edit"></i><span
                                                                            class="nav-text">View and Update</span></a>
                                                                </li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                        href="#"><i
                                                                            class="nav-icon la la-leaf"></i><span
                                                                            class="nav-text">Update Status</span></a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                        href="#"><i
                                                                            class="nav-icon la la-print"></i><span
                                                                            class="nav-text">Print</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <a href="{{ url('edit-superadmin', $superadmins->id) }}"
                                                        class="btn btn-sm btn-clean btn-icon" title="Edit details">
                                                        <i class="la la-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="btn btn-sm btn-clean btn-icon view_details"
                                                        id="{{ $superadmins->id }}" title="View details">
                                                        <i class="la la-eye"></i>
                                                    </a>
                                                    <form class="btn btn-sm btn-clean btn-icon" method="POST"
                                                        action="{{ route('delete-superadmin', $superadmins->id) }}">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button
                                                            class="kt_sweetalert_demo_9 btn btn-sm btn-clean btn-icon show_confirm"
                                                            type="submit" data-toggle="tooltip" title='Delete'><i
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
                    </div>
                    <div id="detail-tab" class="col-6 border" style="display:none">
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>

    <script>
        $(document).on('click', '.view_details', function() {
            var id = $(this).attr('id');
            $.ajax({
                type: 'post',
                url: '/superadmin/detail',
                data: {
                    'id': id
                },
                success: function(response) {
                    $('#detail-tab').html(response)

                    $('#listing-tab').removeClass('col-12')
                    $('#listing-tab').addClass('col-6')
                    $('#detail-tab').css('display', 'block')
                }
            })
        });

        function divHider() {

            $('#listing-tab').addClass('col-12')
            $('#detail-tab').css('display', 'none')

        }
    </script>
    <!--end::Content-->
@endsection

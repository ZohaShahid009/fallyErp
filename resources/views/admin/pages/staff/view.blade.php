{{-- <div class="card card-custom" style="height: 943px;">
    <!--begin::Header-->
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Staff Details

            </h3>
        </div>
        <a class="detail-close-btn" onclick="divHider()" href="javascript:void(0);"> X</a>

    </div>
    <!--end::Header-->
    <div class="card-body">
            <div class="row">
                <div class="col-lg-11 d-flex">
                    <h2>Staff Details</h2>

                </div>

            </div>
            <table class="table table-bordered">
                <tr>
                    <th>First Name:</th>
                    <td>{{ $staff->first_name }}</td>
                </tr>
                <tr>
                    <th>Last Name:</th>
                    <td>{{ $staff->last_name }}</td>
                </tr>
                <tr>
                    <th>Company Emial:</th>
                    <td>{{ $staff->email }}</td>
                </tr>
                <tr>
                    <th>Hourly Rate:</th>
                    <td>{{ $staff->hourly_rate }}</td>
                </tr>
                <tr>
                    <th>phone:</th>
                    <td>{{ $staff->phone }}</td>
                </tr>
                <tr>
                    <th>Facebook:</th>
                    <td>{{ $staff->facebook_url }}</td>
                </tr>

            </table>
    </div>
</div> --}}







<div class="card card-custom">
    <!--begin::Header-->
    <div class="card-header h-auto py-4">
        <div class="card-title">
            <h3 class="card-label">Company
            <span class="d-block text-muted pt-2 font-size-sm">company profile preview</span></h3>
        </div>
        <div class="card-toolbar">
            <a href="#" class="btn btn-default btn-sm font-weight-bold" data-toggle="dropdown">
            <i class="flaticon2-gear"></i>Export</a>
            <div class="dropdown-menu dropdown-menu-right p-0 m-0 dropdown-menu-md">
                <!--begin::Navigation-->
                <ul class="navi navi-hover py-5">
                    <li class="navi-item">
                        <a href="#" class="navi-link">
                            <span class="navi-icon">
                                <i class="flaticon2-drop"></i>
                            </span>
                            <span class="navi-text">New Group</span>
                        </a>
                    </li>
                    <li class="navi-item">
                        <a href="#" class="navi-link">
                            <span class="navi-icon">
                                <i class="flaticon2-list-3"></i>
                            </span>
                            <span class="navi-text">Contacts</span>
                        </a>
                    </li>
                    <li class="navi-item">
                        <a href="#" class="navi-link">
                            <span class="navi-icon">
                                <i class="flaticon2-rocket-1"></i>
                            </span>
                            <span class="navi-text">Groups</span>
                            <span class="navi-link-badge">
                                <span class="label label-light-primary label-inline font-weight-bold">new</span>
                            </span>
                        </a>
                    </li>
                    <li class="navi-item">
                        <a href="#" class="navi-link">
                            <span class="navi-icon">
                                <i class="flaticon2-bell-2"></i>
                            </span>
                            <span class="navi-text">Calls</span>
                        </a>
                    </li>
                    <li class="navi-item">
                        <a href="#" class="navi-link">
                            <span class="navi-icon">
                                <i class="flaticon2-gear"></i>
                            </span>
                            <span class="navi-text">Settings</span>
                        </a>
                    </li>
                    <li class="navi-separator my-3"></li>
                    <li class="navi-item">
                        <a href="#" class="navi-link">
                            <span class="navi-icon">
                                <i class="flaticon2-magnifier-tool"></i>
                            </span>
                            <span class="navi-text">Help</span>
                        </a>
                    </li>
                    <li class="navi-item">
                        <a href="#" class="navi-link">
                            <span class="navi-icon">
                                <i class="flaticon2-bell-2"></i>
                            </span>
                            <span class="navi-text">Privacy</span>
                            <span class="navi-link-badge">
                                <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                            </span>
                        </a>
                    </li>
                </ul>
                <!--end::Navigation-->
            </div>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-4">
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Name:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">Loop Inc.</span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Location:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">London, UK.</span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Revenue:</label>
            <div class="col-8">
                <span class="form-control-plaintext">
                <span class="font-weight-bolder">345,000M</span>&#160;
                <span class="label label-inline label-danger label-bold">Q4, 2019</span></span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Phone:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">+456 7890456</span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Email:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">
                    <a href="#">info@loop.com</a>
                </span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Website:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">
                    <a href="#">www.loop.com</a>
                </span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Contact Person:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">
                    <a href="#">Nick Bold</a>
                </span>
            </div>
        </div>
    </div>
    <!--end::Body-->
    <!--begin::Footer-->
    <div class="card-footer">
        <a href="#" class="btn btn-primary font-weight-bold mr-2">Manage company</a>
        <a href="#" class="btn btn-light-primary font-weight-bold">Learn more</a>
    </div>
    <!--end::Footer-->
</div>

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
            <h3 class="card-label">Staff
                <span class="d-block text-muted pt-2 font-size-sm">Staff profile preview</span>
            </h3>
        </div>
        <div class="card-toolbar">
            <a onclick="divHider()" href="javascript:void(0);" class="btn btn-primary btn-sm font-weight-bold"
                data-toggle="dropdown">
                <i></i>Close</a>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-4">
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">First Name:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">{{ $staff->first_name }}.</span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Last Name:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">{{ $staff->last_name }}.</span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Location:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">London, UK.</span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Hourly Rate:</label>
            <div class="col-8">
                <span class="form-control-plaintext">
                    <span class="font-weight-bolder">{{ $staff->hourly_rate }}</span>&#160;
                    <span class="label label-inline label-danger label-bold">Q4, 2019</span></span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Phone:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">{{ $staff->phone }}</span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Email:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">
                    <a href="#">{{ $staff->email }}</a>
                </span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Facebook:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">
                    <a href="#">{{ $staff->facebook_url }}</a>
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

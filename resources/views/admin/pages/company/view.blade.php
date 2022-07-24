{{-- <div class="card card-custom" style="height: 943px;">
    <!--begin::Header-->
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Company Details

            </h3>
        </div>
        <a class="detail-close-btn" onclick="divHider()" href="javascript:void(0);"> X</a>

    </div>
    <!--end::Header-->
    <div class="card-body">
            <div class="row">
                <div class="col-lg-11 d-flex">
                    <h2>Company Details</h2>

                </div>

            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Company Name:</th>
                    <td>{{ $company->company_name }}</td>
                </tr>
                <tr>
                    <th>Company Emial:</th>
                    <td>{{ $company->company_email }}</td>
                </tr>
                <tr>
                    <th>Company Phone:</th>
                    <td>{{ $company->company_phone }}</td>
                </tr>
                <tr>
                    <th>Vat number:</th>
                    <td>{{ $company->vat_number }}</td>
                </tr>
                <tr>
                    <th>Website:</th>
                    <td>{{ $company->website_url }}</td>
                </tr>
                <tr>
                    <th>City:</th>
                    <td>{{ $company->city }}</td>
                </tr>
                <tr>
                    <th>Counry:</th>
                    <td>{{ $company->country }}</td>
                </tr>
                <tr>
                    <th>State:</th>
                    <td>{{ $company->state }}</td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td>{{ $company->address }}</td>
                </tr>
                <tr>
                    <th>Zip Code:</th>
                    <td>{{ $company->zip_code }}</td>
                </tr>

            </table>
    </div>
</div> --}}



<div class="card card-custom">
    <!--begin::Header-->
    <div class="card-header h-auto py-4">
        <div class="card-title">
            <h3 class="card-label">Company
                <span class="d-block text-muted pt-2 font-size-sm">company profile preview</span>
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
            <label class="col-4 col-form-label">Name:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">{{ $company->company_name }}.</span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">VAT Number:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">{{ $company->vat_number }}.</span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Country:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">{{ $company->country }}.</span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">State:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">{{ $company->state }}.</span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">City:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">{{ $company->city }}.</span>
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
                <span class="form-control-plaintext font-weight-bolder">{{ $company->company_phone }}</span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Email:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">
                    <a href="#">{{ $company->company_email }}</a>
                </span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Website:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">
                    <a href="#">{{ $company->website_url }}</a>
                </span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Contact Person:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">
                    <a href="#">{{ $company->website_url }}</a>
                </span>
            </div>
        </div>
    </div>
    <!--end::Body-->
    <!--begin::Footer-->
    <div class="card-footer">
        <a href="#" class="btn btn-primary font-weight-bold mr-2">Manage company</a>
    </div>
    <!--end::Footer-->
</div>

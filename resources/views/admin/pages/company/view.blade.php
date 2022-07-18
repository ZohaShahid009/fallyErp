<div class="card card-custom" style="height: 943px;">
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
</div>
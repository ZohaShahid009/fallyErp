<div class="card card-custom" style="height: 943px;">
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
</div>

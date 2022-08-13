<div class="card card-custom" style="height: 943px; width: 400px;">
    <!--begin::Header-->
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">User Details
            </h3>
        </div>
        <a class="detail-close-btn" onclick="divHider()" href="javascript:void(0);"> X</a>

    </div>
    <!--end::Header-->
    <div class="card-body">
            <div class="row">
                <div class="col-lg-11 d-flex">
                    <h2>User Details</h2>

                </div>

            </div>
            <table class="table table-bordered">
                <tr>
                    <th>First Name:</th>
                    <td>{{ $user->first_Name }}</td>
                </tr>
                <tr>
                    <th>Last Name:</th>
                    <td>{{ $user->Last_name}}</td>
                </tr>
                <tr>
                    <th>Email :</th>
                    <td>{{ $user->email}}</td>
                </tr>
                <tr>
                    <th>Phone Number :</th>
                    <td>{{ $user->Phone_Number}}</td>
                </tr>
                <tr>
                    <th>User Type :</th>
                    <td>{{ $user->User_Type}}</td>
                </tr>
            </table>
    </div>
</div>

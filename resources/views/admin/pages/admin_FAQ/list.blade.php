<div class="card card-custom" style="height: 943px;">
    <!--begin::Header-->
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Admin Details

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
                    <th>Category_id:</th>
                    <td>{{ $admin->Category_id }}</td>
                </tr>
                <tr>
                    <th>Tittle:</th>
                    <td>{{ $admin->Tittle  }}</td>
                </tr>
                <tr>
                    <th>Discrption :</th>
                    <td>{{ $admin->Discrption}}</td>
                </tr>


            </table>
    </div>
</div>

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
        'category','tittle','short_description','long_description','start_date' ,'end_date','image',

                <tr>
                    <th>Category:</th>
                    <td>{{ $project->category }}</td>
                </tr>
                <tr>
                    <th>tittle:</th>
                    <td>{{ $project->tittle}}</td>
                </tr>
                <tr>
                    <th>Short Description:</th>
                    <td>{{ $project->short_description }}</td>
                </tr>
                <tr>
                    <th>Long Description:</th>
                    <td>{{$project->long_description}}</td>
                </tr>
                <tr>
                    <th>Start Date:</th>
                    <td>{{$project->start_date}}</td>
                </tr>

                <tr>
                    <th>End Date:</th>
                    <td>{{$project->end_date}}</td>
                </tr>
            </table>
    </div>
</div>

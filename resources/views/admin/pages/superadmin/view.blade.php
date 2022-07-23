{{-- <div class="card card-custom" style="height: 943px;">
    <!--begin::Header-->
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Super Admin Details

            </h3>
        </div>
        <a class="detail-close-btn" onclick="divHider()" href="javascript:void(0);"> X</a>

    </div>
    <!--end::Header-->
    <div class="card-body">
            <div class="row">
                <div class="col-lg-11 d-flex">
                    <h2>Super Admin Details</h2>

                </div>

            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Name:</th>
                    <td>{{ $superadmin->name }}</td>
                </tr>
                <tr>
                    <th>Super Admin Email:</th>
                    <td>{{ $superadmin->email }}</td>
                </tr>

            </table>
    </div>
</div> --}}





<div class="card card-custom">
    <!--begin::Header-->
    <div class="card-header h-auto py-4">
        <div class="card-title">
            <h3 class="card-label">Super Admin
                <span class="d-block text-muted pt-2 font-size-sm">Super admin profile</span>
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
            <label class="col-4 col-form-label">profile image:</label>
            <div class=" mt-5 mb-5 image-input image-input-outline image-input-circle" id="kt_image_3">
                <div class="image-input-wrapper"
                    style="background-image: url({{ asset('/') }}uploaded_images/superadmin_images/{{ $superadmin->profile_image }})">
                </div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                    data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="profile_avatar_remove" />
                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                    data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Name:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">{{ $superadmin->name }}.</span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Location:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">London, UK.</span>
            </div>
        </div>
        <div class="form-group row my-2">
            <label class="col-4 col-form-label">Email:</label>
            <div class="col-8">
                <span class="form-control-plaintext font-weight-bolder">
                    <a href="#">{{ $superadmin->email }}</a>
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

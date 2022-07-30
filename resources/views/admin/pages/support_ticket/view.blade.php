@extends('admin.layout.adminLayout')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid wrapper" id="kt_content">
        <!--begin::Subheader-->

        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4">
                        <div class="card card-custom">
                            <!--begin::Header-->
                            <div class="card-header h-auto py-4">
                                <div class="card-title">
                                    <h3 class="card-label">Ticket details
                                        <span class="d-block text-muted pt-2 font-size-sm">...</span>
                                    </h3>
                                </div>
                                <div class="card-toolbar">
                                    <a onclick="divHider()" href="javascript:void(0);"
                                        class="btn btn-primary btn-sm font-weight-bold" data-toggle="dropdown">
                                        <i></i>Close</a>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="card-body py-4">
                                <div class="form-group row my-2">

                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Ticket Number:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">{{ $SupportTicket->id }}</span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Status:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">{{$SupportTicket->status}}</span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Type:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            {{$SupportTicket->type}}
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">From:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            {{$SupportTicket->from}}
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Created at:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            {{$SupportTicket->created_at}}
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Queue:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            {{$SupportTicket->queue}}
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Owner:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            {{$SupportTicket->owner}}
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
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

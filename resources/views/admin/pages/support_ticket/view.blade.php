@extends('admin.layout.adminLayout')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid wrapper" id="kt_content">
        <!--begin::Subheader-->

        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
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
                                        <span
                                            class="form-control-plaintext font-weight-bolder">{{ $SupportTicket->id }}</span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Status:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder">{{ $SupportTicket->status }}</span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Type:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            {{ $SupportTicket->type }}
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">From:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            {{ $SupportTicket->from }}
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Created at:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            {{ $SupportTicket->created_at }}
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Queue:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            {{ $SupportTicket->queue }}
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Owner:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            {{ $SupportTicket->owner }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="card-footer">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Assign Ticket
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Assign ticket</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ url('assign/supportticket', $SupportTicket->id) }}">
                                                    <div class="form-group row my-2">
                                                        <label class="col-10 col-form-label">
                                                            <div class="form-group">

                                                                <select class="form-control" name="assign" id="category">
                                                                    @foreach ($staff as $staffs)
                                                                        {
                                                                        <option value="{{ $staffs->id }}">
                                                                            {{ $staffs->first_name }}</option>
                                                                    @endforeach}
                                                                </select>
                                                            </div>
                                                        </label>

                                                    </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal1">
                                    Add notes
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Assign ticket</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ url('add/notes', $SupportTicket->id) }}">
                                                    <div class="form-group row my-2">
                                                        <label class="col-10 col-form-label">
                                                            <div class="form-group">
                                                                <div class="form-group">
                                                                    <label for="comment">Add notes:</label>
                                                                    <textarea class="form-control" rows="5" id="" name="notes"></textarea>
                                                                </div>
                                                            </div>
                                                        </label>

                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-light-primary font-weight-bold">Learn more</a>
                            </div>
                            <!--end::Footer-->
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card card-custom">
                            <div class="card-header">
                                <div class="card-title">
                                    <span class="card-icon">
                                        <i class="flaticon2-chat-1 text-primary"></i>
                                    </span>
                                    <h3 class="card-label">
                                        {{ $SupportTicket->subject }}
                                        <small></small>
                                    </h3>
                                </div>
                                <div class="card-toolbar">
                                    <a href="#" class="btn btn-sm btn-success font-weight-bold">
                                        <i class="flaticon2-cube"></i> Reports
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                {{ $SupportTicket->description }}
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <a href="#" class="btn btn-light-primary font-weight-bold">Manage</a>
                                <a href="#" class="btn btn-outline-secondary font-weight-bold">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

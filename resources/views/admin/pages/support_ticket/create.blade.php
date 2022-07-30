@extends('admin.layout.adminLayout')
@section('content')
    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <div class="container-fluid mb-5">

            <div class="card card-custom example example-compact">
                <div class="container mt-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="card-header">
                    <h3 class="card-title">Create new Supprt Ticket</h3>
                </div>
                <form class="form" action="{{ url('add/supportticket') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        {{-- <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="exampleSelect1">Requested for company:<span
                                            class="text-danger">*</span></label>
                                    <select class="form-control" name="client_company" id="category">
                                        @foreach ($company as $companies)
                                            {
                                            <option value="{{ $companies->id }}">{{ $companies->company_name }}</option>
                                        @endforeach}
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="exampleSelect1">Agent:<span class="text-danger">*</span></label>
                                    <select class="form-control" name="owner" id="category">
                                        @foreach ($admin as $admins)
                                            {
                                            <option value="{{ $admins->id }}">{{ $admins->name }}</option>
                                        @endforeach}
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="exampleSelect1">Type:<span class="text-danger">*</span></label>
                                    <select class="form-control" name="type" id="category">
                                        <option value="Question">Question</option>
                                        <option value="Question">Problem</option>
                                        <option value="Question">In Review</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="exampleSelect1">Type:<span class="text-danger">*</span></label>
                            <select class="form-control" name="type" id="category">
                                <option value="Question">Question</option>
                                <option value="Question">Problem</option>
                                <option value="Incident">Incident</option>
                                <option value="Feature Request">Feature Request</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Subject:</label>
                            <input name="subject" id="subject" type="text" class="form-control form-control-solid"
                                placeholder="Enter subject" />
                            <span class="form-text text-muted">Please enter Subject</span>
                        </div>
                        <div class="form-group">
                            <label for="comment">Description:</label>
                            <textarea class="form-control" rows="5" id="summernote" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="file" id="input-file-to-destroy" name="image" class="dropify"
                                data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" />
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

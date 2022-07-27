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
                    <h3 class="card-title">Fill the Form to add Sliders</h3>
                </div>
                <form class="form" action="{{ url('add/slider/1') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title:</label>
                            <input name="title" id="title" type="text" class="form-control form-control-solid"
                                placeholder="Enter full title" />
                            <span class="form-text text-muted">Please enter</span>
                        </div>
                        <div class="form-group">
                            <label for="comment">sub title:</label>
                            <textarea class="form-control" rows="5" id="summernote" name="subtitle"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="input-file-to-destroy">Slider Image</label>
                                    <input type="file" id="input-file-to-destroy" name="image1" class="dropify"
                                        data-allowed-formats="portrait square" data-max-file-size="2M"
                                        data-max-height="2000" />
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="input-file-to-destroy">Slider Image</label>
                                    <input type="file" id="input-file-to-destroy" name="image2" class="dropify"
                                        data-allowed-formats="portrait square" data-max-file-size="2M"
                                        data-max-height="2000" />
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="input-file-to-destroy">Slider Image</label>
                                    <input type="file" id="input-file-to-destroy" name="image3" class="dropify"
                                        data-allowed-formats="portrait square" data-max-file-size="2M"
                                        data-max-height="2000" />
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="input-file-to-destroy">Slider Image</label>
                                    <input type="file" id="input-file-to-destroy" name="image4" class="dropify"
                                        data-allowed-formats="portrait square" data-max-file-size="2M"
                                        data-max-height="2000" />
                                </div>
                            </div>
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

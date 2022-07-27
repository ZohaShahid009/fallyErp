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
                        <div class="form-group">
                            <input id="image1" name="image1" type="file">
                        </div>
                        <div class="form-group">
                            <input id="image2" name="image2" type="file">
                        </div>
                        <div class="form-group">
                            <input id="image3" name="image3" type="file">
                        </div>
                        <div class="form-group">
                            <input id="image4" name="image4" type="file">
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

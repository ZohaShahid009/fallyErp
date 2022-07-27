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
                    <h3 class="card-title">SEO section</h3>
                </div>
                <form class="form" action="{{ url('add/seo/1') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Meta Title:</label>
                            <input name="meta_title" id="meta_title" type="text" class="form-control form-control-solid"
                                placeholder="Enter full title" />
                            <span class="form-text text-muted">Please enter</span>
                        </div>
                        <div class="form-group">
                            <label for="comment">Meta discription:</label>
                            <textarea class="form-control" rows="5" id="meta_discription" name="meta_discription"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="comment">KeyWords:</label>
                            <textarea class="form-control" rows="5" id="keywords" name="keywords"></textarea>
                        </div>
                        <div class="form-group">
                            <span>Meta Image</span>
                            <input id="meta_image" name="meta_image" type="file">
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

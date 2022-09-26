@extends('admin.layout.adminLayout')
@section('content')
    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <div class="container mb-5">
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
                    <form method="POST" action="{{ url('add-project') }}" class="form" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="separator separator-solid my-10"></div>
                            <div class="my-5">
                                <h3 class=" text-dark font-weight-bold mb-10">Add Project:</h3>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Category</label>
                                    <input name="category" id="Category" type="text" class="form-control" />
                                </div>
                             
                                <div class="col-lg-6">
                                    <label>Tittle:</label>
                                    <input name="tittle" id="Tittle" type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                               <div class="col-lg-6">
                                    <label>Image</label>
                                    <input name="image" id="image" type="file" class="form-control" />
                                </div>
                                <div class="col-lg-6">
                                    <label for="comment">Short Discrption:</label>
                                    <textarea class="form-control" rows="1" id="Short Discrption" name="short_description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comment">Long Discrption:</label>
                                <textarea class="form-control" rows="5" id="comment" name="long_description"></textarea>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Start Date</label>
                                    <input name="start_date" id="start_date" type="date" class="form-control" />

                                </div>
                                <div class="col-lg-6">
                                    <label>End Date</label>
                                    <input name="end_date" id="end_date" type="date" class="form-control" />
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                            {{-- rff end --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

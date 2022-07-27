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
                    <h3 class="card-title">Latest Project Section</h3>
                </div>
                <form class="form" action="{{ url('add/latestproject/1') }}" method="POST" enctype="multipart/form-data">
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
                            <textarea class="form-control" rows="5" id="subtitle" name="subtitle"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </form>
            </div>


            <div class="card card-custom example example-compact mt-5">
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
                    <h3 class="card-title">Featured category Section</h3>
                </div>
                <form class="form" action="{{ url('add/featuredcategory/1') }}" method="POST" enctype="multipart/form-data">
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
                            <textarea class="form-control" rows="5" id="subtitle" name="subtitle"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Select category:<span class="text-danger">*</span></label>
                            <select class="form-control" name="category" id="category">
                                {{-- @foreach ($category as $categories) --}}
                                <option value="11">11</option>
                                <option value="22">22</option>
                                <option value="33">33</option>
                                <option value="44">44</option>
                                {{-- @endforeach --}}
                            </select>
                        </div>
                            <div class="form-group">
                                <input id="leftbanner" name="leftbanner" type="file">
                                <span class="form-text text-muted">Please upload left banner</span>
                            </div>
                            <div class="form-group">
                                <input id="rightbanner" name="rightbanner" type="file">
                                <span class="form-text text-muted">Please upload right banner</span>
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

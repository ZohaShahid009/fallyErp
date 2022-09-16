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
                    <form method="POST" action="{{ url('add-product') }}" class="form" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="separator separator-solid my-10"></div>
                            <div class="my-5">
                                <h3 class=" text-dark font-weight-bold mb-10">Products:</h3>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Tittle</label>
                                    <input name="tittle" id="Tittle" type="text" class="form-control" />

                                </div>
                                {{-- <div class="col-lg-6">
                                    <label for="browser" class="form-label">Add FAQ Category:</label>
                                    <input class="form-control" list="browsers" name="browser" id="browser"
                                        placeholder="no project category added">
                                    <datalist id="browsers">
                                        <option value="Edge">
                                        <option value="Firefox">
                                        <option value="Chrome">
                                        <option value="Opera">
                                        <option value="Safari">
                                    </datalist>
                                </div> --}}
                                <div class="col-lg-6">
                                    <label>Cost:</label>
                                    <input name="cost" id="cost" type="text" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Unit Price</label>
                                    <input name="unit_price" id="unit_price" type="text" class="form-control" />

                                </div>
                                <div class="col-lg-6">
                                    <label>Sale Price</label>
                                    <input name="sale_price" id="sale_price" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Purchase Price</label>
                                    <input name="purchase_price" id="purchase_price" type="text" class="form-control" />
                                </div>
                                <div class="col-lg-6">
                                    <label>Unit</label>
                                    <input name="unit" id="unit" class="form-control" />
                                </div>
                            </div>
                            {{-- <div class="form-group row"> --}}
                            {{--  <div class="form-group">
                                <label>Category id</label>
                                <select name="category_id" id="parent_id" class="form-control">
                                    <option value="0">Category id</option>
                                    {{-- @foreach ($levels as $val)
                                            <option value="{{ $val->id }}">{{ $val->name }}</option>
                                        @endforeach --}}
                                {{--  </select>
                            </div>  --}}
                            <div class="form-group row">
                                <div class="form-group">
                                <label>Category id</label>
                                <select name="category_id" id="parent_id" class="form-control">
                                    <option value="0">Parent Category</option>
                                    @foreach ($levels as $val)
                                    <option value="{{ $val->id }}">{{ $val->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="comment">Discrption:</label>
                                <textarea class="form-control" rows="5" id="summernote" name="discrption"></textarea>
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

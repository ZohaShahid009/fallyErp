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
                    <form method="POST" action="{{ url('add-client') }}" class="form" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="separator separator-solid my-10"></div>
                            <div class="my-5">
                                <h3 class=" text-dark font-weight-bold mb-10">Clients:</h3>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label for="input-file-to-destroy">Logo</label>
                                    <input type="file" id="input-file-to-destroy" name="logo" class="dropify"
                                        data-allowed-formats="portrait square" data-max-file-size="2M"
                                        data-max-height="2000" />
                                    {{--  @if (!empty($settings->company_logo))  --}}
                                        <img style="width:100px;margin-top:10px;" id="blah"
                                            {{--  src="{{ asset('images/' . $settings->company_logo) }}">  --}}

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

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
                    {{-- zoha --}}
                    <form method="POST" action="{{ url('add-email') }}" class="form" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="separator separator-solid my-10"></div>
                            <div class="my-5">
                                <h3 class=" text-dark font-weight-bold mb-10">Languages:</h3>
                            </div>
                            <div class="form-group row">
                                {{-- <div class="col-lg-6">
                                    <label>Tittle</label>
                                    <input name="tittle" id="Tittle" type="text" class="form-control" />
                                </div> --}}

                                <div class="col-lg-6">
                                    <label>Language:</label>
                                    <input name="language" id="language" type="text" class="form-control" />
                                </div>
                                <div class="col-lg-6">
                                    <label>Language Code:</label>
                                    <input name="language_code" id="language_code" type="text" class="form-control" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <div class="checkbox-inline">
                                        <label class="checkbox checkbox-primary">
                                        <input type="checkbox" name="Checkboxes11" />
                                        <span></span>Default</label>
                                            </label></div>
                                        </div>
                                        <div class="col-lg-6">
                                                <label>Status</label>
                                                    <input data-switch="true" type="checkbox" checked="checked" data-on-text="ON" data-off-text="Off" data-on-color="primary" />
                                            </div>
                                        </div>


                                {{-- <div class="col-lg-6">
                                    <label>Smtp Username</label>
                                    <input name="smtp_username" id="smtp_username" type="text" class="form-control" />

                                </div> --}}
                            <div class="form-group row">
                                <label>Translations</label>
                                <div class="col-lg-12">
  <textarea class="form-control" id="textAreaExample1" rows="8"></textarea>
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
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="assets/js/pages/crud/forms/widgets/bootstrap-switch.js"></script>

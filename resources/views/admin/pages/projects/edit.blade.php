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
                </div>
                {{--  <div class="card-header">
                    <h3 class="card-title">Update Staff details</h3>
                </div>  --}}
                <form class="form" action="{{ url('updateproject', $project->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="separator separator-solid my-10"></div>
                        <div class="my-5">
                            <h3 class=" text-dark font-weight-bold mb-10">Update Project:</h3>
                        </div>
                        {{--  start exact  --}}
                        <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Category</label>
                            <input name="category" id="Category" type="text" class="form-control"
                            value="{{ $project->category }}"/>
                        </div>

                        <div class="col-lg-6">
                            <label>Tittle:</label>
                            <input name="tittle" id="Tittle" type="text" class="form-control"
                            value="{{ $project->tittle}}"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                             <label>Image</label>
                             <input name="image" id="image" type="file" class="form-control"
                             value="{{ $project->image}}"/>
                             @if (!empty($project->image))
                             <img style="width:100px;margin-top:10px;" id="blah"
                                 src="{{ asset('images/' . $project->image) }}">
                         @endif
                         </div>
                         <div class="col-lg-6">
                             <label for="comment">Short Discrption:</label>
                             <textarea class="form-control" rows="1" id="Short Discrption" name="short_description"
                             >{{ $project->short_description}}</textarea>
                         </div>
                     </div>
                     <div class="form-group">
                        <label for="comment">Long Discrption:</label>
                        <textarea class="form-control" rows="5" id="comment" name="long_description"
                       > {{ $project->long_description}}</textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Start Date</label>
                            <input name="start_date" id="start_date" type="date" class="form-control"
                            value="{{ $project->start_date}}" />

                        </div>
                        <div class="col-lg-6">
                            <label>End Date</label>
                            <input name="end_date" id="end_date" type="date" class="form-control"
                            value="{{ $project->end_date}}"  />
                        </div>
                    </div>



                        {{-- rff end --}}
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                {{-- <button type="submit" class="btn btn-success mr-2">Update</button> --}}
                                <input type="submit" value="Update" class="btn btn-success mt-2">
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/crud/forms/editors/summernote.js"></script>
@endsection

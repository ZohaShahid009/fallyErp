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
                                <h3 class=" text-dark font-weight-bold mb-10">Translate Manager For Engllish:</h3>
                            </div>

                            <div class="form-group row">
                            <div class="col-lg-6">
                            <h3 class=" text-dark">Origin</h3>
                               </div>
                               <div class="col-lg-6">
                            <h3 class=" text-dark">Translatated</h3>
                               </div>
                               </div>
                               <hr>
                            
                            <div class="form-group row">
                            <div class="col-lg-2">
                            <div>1</div>
                               </div>
                            <div class="col-lg-4">
                            <div>Already have Account?</div>
                               </div>
                                <div class="col-lg-6">
                                <div class="form-outline">
  <textarea class="form-control" id="textAreaExample1" rows="1"></textarea>
</div>
                                  
                                </div>
                                </div>
                                <hr>
<!-- next -->
<div class="form-group row">
                            <div class="col-lg-2">
                            <div>2</div>
                               </div>
                            <div class="col-lg-4">
                            <div>Approved:</div>
                               </div>
                                <div class="col-lg-6">
                                <div class="form-outline">
  <textarea class="form-control" id="textAreaExample1" rows="1"></textarea>
</div>
</div>
                                </div>
                                <hr>
                  <!-- next -->
<div class="form-group row">
                            <div class="col-lg-2">
                            <div>3</div>
                               </div>
                            <div class="col-lg-4">
                            <div>Bulk Action:</div>
                               </div>
                                <div class="col-lg-6">
                                <div class="form-outline">
  <textarea class="form-control" id="textAreaExample1" rows="1"></textarea>
</div>

                          
                                </div>
                                </div>
                                <hr>


                                              <!-- next -->
<div class="form-group row">
                            <div class="col-lg-2">
                            <div>4</div>
                               </div>
                            <div class="col-lg-4">
                            <div>Clone:</div>
                               </div>
                                <div class="col-lg-6">
                                <div class="form-outline">
  <textarea class="form-control" id="textAreaExample1" rows="1"></textarea>
</div>

                          
                                </div>
                                </div>
                                <hr>
                                                                              <!-- next -->
<div class="form-group row">
                            <div class="col-lg-2">
                            <div>5</div>
                               </div>
                            <div class="col-lg-4">
                            <div>Delete:</div>
                               </div>
                                <div class="col-lg-6">
                                <div class="form-outline">
  <textarea class="form-control" id="textAreaExample1" rows="1"></textarea>
</div>

                          
                                </div>
                                </div>
                                <hr>
                            
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-8">
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

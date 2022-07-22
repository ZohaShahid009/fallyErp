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
                    <form method="POST" action="{{ route('plans.store') }}" class="form" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="separator separator-solid my-10"></div>
                            <div class="my-5">
                                <h3 class=" text-dark font-weight-bold mb-10">Create Plan:</h3>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Plan Name</label>
                                    <input name="name" id="name" class="form-control" />

                                </div>


                                <div class="col-lg-6">
                                    <label>Amount</label>
                                    <input type="number" name="amount" class="form-control" placeholder="Enter amount">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Currency</label>
                                    {{-- <input name="name"  id="name"  class="form-control" /> --}}
                                    <input name="currency" class="form-control" placeholder="Enter currency">

                                </div>
                                <div class="col-lg-6">
                                    <label>Interval Count</label>
                                    <input type="number" name="interval_count" class="form-control"
                                        placeholder="Enter count">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Billing Period</label>
                                <select name="billing_period" class="form-control">
                                    <option disabled selected>Choose billing method</option>
                                    <option value="week">Weekly</option>
                                    <option value="month">Monthly</option>
                                    <option value="year">Yearly</option>
                                </select>
                            </div><br>
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

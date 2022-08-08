@extends('admin.layout.adminLayout')
@section('content')


<style>
    .kbw-signature { width: 100%; height: 200px;}
    #sig canvas{ width: 100% !important; height: auto;}
</style>

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
                    <form class="form" action="{{ url('updatesettings', $settings->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="separator separator-solid my-10"></div>
                            <div class="my-5">
                                <h3 class=" text-dark font-weight-bold mb-10">Global Settings:</h3>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Company Name</label>

                                    <input name="company_name" id="company_name" type="text" class="form-control"
                                        value="{{ $settings->company_name }}" />

                                </div>

                                <div class="col-lg-6">
                                    <label>Company Contact:</label>
                                    <input name="company_contact" id="company_contact" type="text" class="form-control"
                                        value="{{ $settings->company_contact }}" />
                                </div>
                            </div>
                            {{--  zoi  --}}

                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Industry</label>
                                <select class="form-control" name="industry">
                                    <option>{{ $settings->industry}}</option>
                                    <option value="Technology">Technology</option>
                                        <option value="Health">Health</option>
                                        <option value="Media">Media</option>
                                        <option value="Construction">Construction</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>Company Size</label>
                                <select class="form-control" name="company_size">
                                    <option>{{$settings->company_size}}</option>
                                    <option value="Micro-sized business">Micro-sized business</option>
                                    <option value="Small-sized business">Small-sized business</option>
                                    <option value="Medium-sized business">Medium-sized business</option>
                                    <option value="Large-sized business">Large-sized business</option>
                                </select>
                            </div>
                        </div>

                            {{--  end  --}}
                            <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Country</label>
                                <select class="form-control" name="country">
                                    <option>{{ $settings->country}}</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->name }}">
                                            {{ $country->name }}
                                          ({{ $country->code }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label>Company Email</label>
                                <input name="company_email" id="unit" class="form-control"
                                    value="{{ $settings->company_email }}" />
                            </div>
                            </div>
                            {{--  end  --}}

                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Company Address</label>
                                    <input name="company_address" id="company_address" type="text" class="form-control"
                                        value="{{ $settings->company_address }}" />

                                </div>
                                <div class="col-lg-6">
                                    <label>Company City</label>
                                    <input name="company_city" id="company_city" class="form-control"
                                        value="{{ $settings->company_city }}" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Company Domain</label>
                                    <input name="company_domain" id="company_domain" type="text" class="form-control"
                                        value="{{ $settings->company_domain }}" />
                                </div>

                                <div class="col-lg-6">
                                    <label>Currency Position</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input name="currency_position" type="text" class="form-control" placeholder="$"
                                            value="{{ $settings->currency_position }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Invoice Detail</label>
                                    <input name="invoice_detail" id="invoice_detail" type="text" class="form-control"
                                        value="{{ $settings->invoice_detail }}" />
                                </div>
                                <div class="col-lg-6">
                                    <label>Tax</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input name="tax" type="text" class="form-control" placeholder="99.9"
                                            value="{{ $settings->tax }}" />
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Second Tax</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input name="second_tax" type="text" class="form-control" placeholder="22.2"
                                            value="{{ $settings->second_tax }}" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Vat Number</label>
                                    <input name="vat_number" id="vat_number" class="form-control"
                                        value="{{ $settings->vat_number }}" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Default Currency</label>
                                    <select class="form-control" name="default_currency">
                                        <option value="{{ $settings->default_currency }}">
                                            Please select...</option>
                                        <option selected value="1">
                                            Dollars
                                            ($)
                                        </option>
                                        <option value="2">
                                            Pounds -
                                            (£)
                                        </option>
                                        <option value="3">
                                            Euros -
                                            (€)
                                        </option>
                                        <option value="4">
                                            Rupee -
                                            (₹)
                                        </option>
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <label for="example-date-input">Date </label>
                                    <input name="date_formate" class="form-control" type="date" value="2011-08-19"
                                        id="example-date-input" value="{{ $settings->date_formate }}" />

                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-lg-6">
                                    <label for="example-time-input">Time</label>
                                    <input name="time_formate" class="form-control" type="time" value="13:45:00"
                                        id="time-input" value="{{ $settings->time_formate }}" />
                                </div>

                                <div class="col-lg-6">
                                    <label>Timezone</label>
                                    <select class="form-control" name="timezone">
                                        <option>{{ $settings->timezone }}</option>
                                        @foreach ($timezones as $timezone)
                                            <option value="{{ $timezone->id }}">{{ $timezone->name }}
                                                ({{ $timezone->offset }})
                                            </option>
                                        @endforeach
                                    </select>

                                </div>
                                {{-- rff ennd --}}
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label for="currency-field">Money Formate</label>
                                    <input type="text" name="money_formate" id="currency-field"
                                        pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency"
                                        placeholder="$1,000,000.00" class="form-control"
                                        value="{{ $settings->money_formate }}">
                                </div>
                            </div>
                            {{-- start all logo --}}
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label for="input-file-to-destroy">Company Logo</label>
                                    <input type="file" id="input-file-to-destroy" name="company_logo" class="dropify"
                                        data-allowed-formats="portrait square" data-max-file-size="2M"
                                        data-max-height="2000" />
                                    @if (!empty($settings->company_logo))
                                        <img style="width:100px;margin-top:10px;" id="blah"
                                            src="{{ asset('images/' . $settings->company_logo) }}">
                                    @endif
                                </div>

                                <div class="col-lg-6">
                                    <label for="input-file-to-destroy">Footer Logo</label>
                                    <input type="file" id="input-file-to-destroy" name="footer_logo" class="dropify"
                                        data-allowed-formats="portrait square" data-max-file-size="2M"
                                        data-max-height="2000" />
                                    @if (!empty($settings->footer_logo))
                                        <img style="width:100px;margin-top:10px;" id="blah"
                                            src="{{ asset('images/' . $settings->footer_logo) }}">
                                    @endif

                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label for="input-file-to-destroy">Auth Logo</label>
                                    <input type="file" id="input-file-to-destroy" name="auth_logo" class="dropify"
                                        data-allowed-formats="portrait square" data-max-file-size="2M"
                                        data-max-height="2000" />
                                    @if (!empty($settings->auth_logo))
                                        <img style="width:100px;margin-top:10px;" id="blah"
                                            src="{{ asset('images/' . $settings->auth_logo) }}">
                                    @endif
                                </div>

                                <div class="col-lg-6">

                                    <label for="input-file-to-destroy">Admin Logo</label>
                                    <input type="file" id="input-file-to-destroy" name="admin_logo" class="dropify"
                                        data-allowed-formats="portrait square" data-max-file-size="2M"
                                        data-max-height="2000" />
                                    @if (!empty($settings->admin_logo))
                                        <img style="width:100px;margin-top:10px;" id="blah"
                                            src="{{ asset('images/' . $settings->admin_logo) }}">
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label for="input-file-to-destroy">Invoice Logo</label>
                                    <input type="file" id="input-file-to-destroy" name="invoice_logo" class="dropify"
                                        data-allowed-formats="portrait square" data-max-file-size="2M"
                                        data-max-height="2000" />
                                    @if (!empty($settings->invoice_logo))
                                        <img style="width:100px;margin-top:10px;" id="blah"
                                            src="{{ asset('images/' . $settings->invoice_logo) }}">
                                    @endif
                                </div>
{{--  rff  --}}
<div class="col-lg-6">
    <label class="" for="">Signature:</label>
    <br/>
    <div id="sig"></div>
    <br><br>
    <button id="clear" class="btn btn-danger">Clear Signature</button>
    {{--  <button class="btn btn-success">Save</button>  --}}
    <textarea id="signature" name="signed" style="display: none"></textarea>
    @if (!empty($settings->signed))
    <img style="width:100px;margin-top:10px;" id="blah"
        src="{{ asset('images/' . $settings->signed) }}">
@endif
</div>
{{--  end  --}}


                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <button type="submit" class="btn btn-primary mr-2">Update</button>
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


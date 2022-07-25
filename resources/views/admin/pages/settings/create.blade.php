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
                    <form method="POST" action="{{ url('add-setting') }}" class="form" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="separator separator-solid my-10"></div>
                            <div class="my-5">
                                <h3 class=" text-dark font-weight-bold mb-10">Global Settings:</h3>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Company Name</label>
                                    <input name="company_name" id="company_name" type="text" class="form-control" />

                                </div>

                                <div class="col-lg-6">
                                    <label>Company Contact:</label>
                                    <input name="company_contact" id="company_contact" type="text"
                                        class="form-control" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Company Address</label>
                                    <input name="company_address" id="company_address" type="text"
                                        class="form-control" />

                                </div>
                                <div class="col-lg-6">
                                    <label>Company City</label>
                                    <input name="company_city" id="company_city" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Company Phone</label>
                                    <input name="company_phone" id="company_phone" type="text" class="form-control" />
                                </div>
                                <div class="col-lg-6">
                                    <label>Company Email</label>
                                    <input name="company_email" id="unit" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Company Domain</label>
                                    <input name="company_domain" id="company_domain" type="text" class="form-control" />
                                </div>



                                {{-- <div class="col-lg-6">
                                    <label>Company Logo</label>
                                    <div class="form-group">
                                        <input type="file" name="company_logo" accept="image/x-png,image/gif,image/jpeg"
                                            class="form-control">
                                    </div>
                                </div> --}}
                                <div class="col-lg-6">
                                    <label>Currency Position</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input name="currency_position"type="text" class="form-control"
                                            placeholder="$" />
                                    </div>
                            </div>
                            </div>

                            {{-- <label>Auth Logo</label>
                                    <input name="auth_logo" id="auth_logo" type="text" class="form-control" />
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Invoice Detail</label>
                                    <input name="invoice_detail" id="invoice_detail" type="text" class="form-control" />
                                </div>
                                <div class="col-lg-6">
                                    <label>Tax</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input name="tax" type="text" class="form-control" placeholder="99.9" />
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6">
                                    <label>Tax</label>
                                    <input name="tax" id="tax" class="form-control" />
                                </div> --}}
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Second Tax</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input name="second_tax" type="text" class="form-control"
                                            placeholder="22.2" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Vat Number</label>
                                    <input name="vat_number" id="vat_number" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label>Default Currency</label>
                                    <select class="form-control" name="default_currency">
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
                                        id="example-date-input" />

                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="col-lg-6">
                                    <label for="example-time-input">Time</label>
                                    <input name="time_formate" class="form-control" type="time" value="13:45:00"
                                        id="time-input" />
                                </div>

                                <div class="col-lg-6">
                                    <label>Timezone</label>
                                    <select class="form-control" name="timezone">
                                        <option value="">Please select...</option>
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
                                        pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency"
                                        placeholder="$1,000,000.00" class="form-control">
                                </div>
                            </div>
                                {{-- start all logo --}}
                                <div class="form-group row">
                                <div class="col-lg-6">
                                    <label for="input-file-to-destroy">Company Logo</label>
                                    <input type="file" id="input-file-to-destroy" name="company_logo" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" />
                                    {{-- <p class="help">Only portrait or square images, 2M max and 2000px max-height.</p> --}}

                                </div>


                                {{-- <div class="col-lg-6">
                                    <label>Footer Logo</label>
                                    <div class="form-group">
                                        <input type="file" name="footer_logo" accept="image/x-png,image/gif,image/jpeg"
                                            class="form-control">
                                    </div> --}}
                                    <div class="col-lg-6">
                                        <label for="input-file-to-destroy">Footer Logo</label>
                                        <input type="file" id="input-file-to-destroy" name="footer_logo" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" />
                                        {{-- <p class="help">Only portrait or square images, 2M max and 2000px max-height.</p> --}}

                                    </div>
                                </div>
                                {{-- <div class="col-lg-6">
                                    <label>Footer Logo</label>
                                    <input name="footer_logo" id="footer_logo" type="text" class="form-control" />
                                </div> --}}


                                    {{-- <label>Auth Logo</label>
                                    <div class="form-group">
                                        <input type="file" name="auth_logo" accept="image/x-png,image/gif,image/jpeg"
                                            class="form-control">
                                    </div> --}}
                                    <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="input-file-to-destroy">Auth Logo</label>
                                        <input type="file" id="input-file-to-destroy" name="auth_logo" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" />
                                        {{-- <p class="help">Only portrait or square images, 2M max and 2000px max-height.</p> --}}
                                        {{-- <br/> --}}
                                    </div>

                                <div class="col-lg-6">
                                    {{-- <label>Admin Logo</label>
                                    <div class="form-group">
                                        <input type="file" name="admin_logo" accept="image/x-png,image/gif,image/jpeg"
                                            class="form-control">
                                    </div> --}}
                                    <label for="input-file-to-destroy">Admin Logo</label>
                                    <input type="file" id="input-file-to-destroy" name="admin_logo" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" />
                                    {{-- <p class="help">Only portrait or square images, 2M max and 2000px max-height.</p> --}}
                                    {{-- <br /> --}}
                                </div>
                                </div>
                                {{-- <div class="col-lg-6">
                                    <label>Admin Logo</label>
                                    <input name="admin_logo" id="admin_logo" class="form-control" />
                                </div> --}}
                                {{-- <div class="col-lg-6">
                                    <label>Invoice Logo</label>
                                    <input name="invoice_logo" id="invoice_logo" type="text" class="form-control" />
                                </div> --}}

                                    {{-- <label>Invoice Logo</label>
                                    <div class="form-group">
                                        <input type="file" name="invoice_logo" accept="image/x-png,image/gif,image/jpeg"
                                            class="form-control">
                                    </div> --}}
                                    <div class="form-group row">
                                    <div class="col-lg-12">

                                        {{-- zoha --}}
                                        {{-- <label>Currency Position</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input name="currency_position"type="text" class="form-control"
                                                placeholder="$" />
                                        </div> --}}

                                            <label for="input-file-to-destroy">Invoice Logo</label>
                                            <input type="file" id="input-file-to-destroy" name="invoice_logo" class="dropify" data-allowed-formats="portrait square" data-max-file-size="2M" data-max-height="2000" />
                                            {{-- <p class="help">Only portrait or square images, 2M max and 2000px max-height.</p> --}}
                                            {{-- <br /> --}}
                                    </div>
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

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


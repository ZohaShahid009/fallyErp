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

                    <div class="col-md-12">

                            <div class="card-header">
                                <h3>Make Payment</h3>
                            </div>
                            <form class="form" method="POST" action="{{ url('create/invoice/payment') }}">




                                <div class="card-body justify-content-center">
                                    @csrf
                                    <div class="form-group">
                                    <label for="exampleSelect1">Invoice:<span class="text-danger">*</span></label>
                                    <select class="form-control" id="invoice_id" name="invoice_id">
                                        @forelse($invoice as $invoices)
                                            <option value="{{ $invoices->id }}"> {{ $invoices->client->company_name }}-
                                                {{ $invoices->invoice_number }} - {{ $invoices->client->primary_contact }} -
                                                ${{ number_format($invoices->balance, 2) }} |
                                                ${{ number_format($invoices->amount, 2) }} </option>
                                        @empty
                                        @endforelse
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    Payment Amount:
                                    <input type="text" name="payment_amount" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                    Payment Type:
                                    <select class="form-control" id="payment_type" name="payment_type">
                                        <option value="Cash">Cash</option>
                                        <option value="Check">Check</option>
                                        <option value="Money Order">Money Order</option>
                                        <option value="Debit Card">Debit Card</option>
                                        <option value="Credit Card Other">Credit Card Other</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    Payment Date:
                                    <input type="date" name="payment_date" value="{{ date('Y-m-d') }}"
                                        class="form-control" />
                                    </div>
                                    <div class="form-group">
                                    Transaction Reference:
                                    <input type="text" name="transaction_reference" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                    Private Notes:
                                    <textarea name="private_notes" class="form-control"></textarea>
                                    <br>
                                    </div>
                                    <input type="submit" value="Save" class="btn btn-primary">
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection

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
                    <h3 class="card-title">Create new Invoice</h3>
                </div>
                <form class="form" action="{{ url('create/invoice/') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleSelect1">Client:<span class="text-danger">*</span></label>
                            <select class="form-control" name="client_id" id="client_id">
                                @foreach ($company as $client)
                                    <option value="{{ $client->id }}">{{ $client->company_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label>Refrence number:</label>
                            <input name="ref_number" id="ref_number" type="text"
                                class="form-control form-control-solid" />
                            <span class="form-text text-muted">Please enter refrence number</span>
                        </div> --}}
                        <div class="form-group">
                            Refrence number:
                            <input type="text" name="ref_number" id="ref_number"
                                value="INV-{{ date('Y-m-d') }}-{{ $num }}" class="form-control" readonly />
                        </div>
                        <div class="form-group">
                            Invoice Date:
                            <input type="date" name="invoice_date" value="{{ date('Y-m-d') }}" class="form-control" />
                        </div>
                        <div class="form-group">
                            Due Date:
                            <input type="date" name="due_date" class="form-control" />
                        </div>
                        <div class="form-group">
                            discount type
                            <select class="form-control" id="discount_type" name="discount_type">
                                <option value="Amount">Amount</option>
                                <option value="Percent">Percent</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="comment">Description:</label>
                            <textarea class="form-control" rows="5" id="summernote" name="notes"></textarea>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-12">
                                <table class="table table-bordered table-hover" id="tab_logic">
                                    <thead>
                                        <tr>
                                            <th class="text-center"> # </th>
                                            <th class="text-center"> item name </th>
                                            <th class="text-center"> item description </th>
                                            <th class="text-center"> Qty </th>
                                            <th class="text-center"> Price </th>
                                            <th class="text-center"> Total </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr id='addr0'>
                                            <td>1</td>
                                            <td><input type="text" name='name[]'
                                                    placeholder='Enter Product Name' class="form-control" /></td>
                                            <td>
                                                <textarea type="text" name='desc[]' placeholder='Enter item_description' class="form-control"></textarea>
                                            </td>
                                            <td><input type="number" name='qty[]' placeholder='Enter Qty'
                                                    class="form-control qty" step="0" min="0" /></td>
                                            <td><input type="number" name='price[]'
                                                    placeholder='Enter Unit Price' class="form-control price" step="0.00"
                                                    min="0" /></td>
                                            <td><input type="number" name='total[]' placeholder='0.00'
                                                    class="form-control total" readonly /></td>
                                        </tr>

                                        <tr id='addr1'></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-12">
                                <a id="add_row" class="btn btn-default pull-left">Add Row</a>
                                <a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
                            </div>
                        </div>
                        <div class="row clearfix" style="margin-top:20px">
                            <div class="pull-right col-5">
                                <table class="table table-bordered table-hover" id="tab_logic_total">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">Sub Total</th>
                                            <td class="text-center"><input type="number" name='sub_total'
                                                    placeholder='0.00' class="form-control" id="sub_total" readonly />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Tax</th>
                                            <td class="text-center">
                                                <div class="input-group mb-2 mb-sm-0">
                                                    <input type="number" class="form-control" id="tax"
                                                        placeholder="0">
                                                    <div class="input-group-addon">%</div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Tax Amount</th>
                                            <td class="text-center"><input type="number" name='tax_amount'
                                                    id="tax_amount" placeholder='0.00' class="form-control" readonly />
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Grand Total</th>
                                            <td class="text-center"><input type="number" name='total_amount'
                                                    id="total_amount" placeholder='0.00' class="form-control" readonly />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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

    <script>
        $(document).ready(function() {
            var i = 1;
            $("#add_row").click(function() {
                b = i - 1;
                $('#addr' + i).html($('#addr' + b).html()).find('td:first-child').html(i + 1);
                // $('#addr' + i).html($('#addr' + b).html()).find('td:nth-child(2)').find('input').attr("name",products[+i][name]);
                // $('.zzz').attr("name", +i);

                $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');


                i++;
                // z++;
            });
            $("#delete_row").click(function() {
                if (i > 1) {
                    $("#addr" + (i - 1)).html('');
                    i--;
                }
                calc();
            });

            $('#tab_logic tbody').on('keyup change', function() {
                calc();
            });
            $('#tax').on('keyup change', function() {
                calc_total();
            });


        });

        function calc() {
            $('#tab_logic tbody tr').each(function(i, element) {
                var html = $(this).html();
                if (html != '') {
                    var qty = $(this).find('.qty').val();
                    var price = $(this).find('.price').val();
                    $(this).find('.total').val(qty * price);

                    calc_total();
                }
            });
        }

        function calc_total() {
            total = 0;
            $('.total').each(function() {
                total += parseInt($(this).val());
            });
            $('#sub_total').val(total.toFixed(2));
            tax_sum = total / 100 * $('#tax').val();
            $('#tax_amount').val(tax_sum.toFixed(2));
            $('#total_amount').val((tax_sum + total).toFixed(2));
        }
    </script>
@endsection

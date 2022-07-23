<div class="card card-custom" style="height: 560px; width:300px; ">
    <!--begin::Header-->
    <div class="card-header flex-wrap border-0 pt-6 pb-0">
        <div class="card-title">
            <h3 class="card-label">Product Details

            </h3>
        </div>
        <a class="detail-close-btn" onclick="divHider()" href="javascript:void(0);"> X</a>

    </div>
    <!--end::Header-->
    <div class="card-body">
            <div class="row">
                <div class="col-lg-11 d-flex">
                    <h2>Product Details</h2>

                </div>

            </div>
            <table class="table table-bordered">
                <tr>
                    <th>Category Id:</th>
                    <td>{{ $product->category_id }}</td>
                </tr>
                <tr>
                    <th>Tittle:</th>
                    <td>{{ $product->tittle }}</td>
                </tr>
                <tr>
                    <th>Cost:</th>
                    <td>{{ $product->cost }}</td>
                </tr>
                <tr>
                    <th>Unit Price:</th>
                    <td>{{ $product->unit_price }}</td>
                </tr>
                <tr>
                    <th>Sale Price:</th>
                    <td>{{ $product->sale_price }}</td>
                </tr>
                <tr>
                    <th>Purchase Price:</th>
                    <td>{{ $product->purchase_price }}</td>
                </tr>
                <tr>
                    <th>Unit:</th>
                    <td>{{ $product->unit }}</td>
                </tr>
                <tr>
                    <th>Discrption:</th>
                    <td>{{ $product->discrption}}</td>
                </tr>

            </table>
    </div>
</div>

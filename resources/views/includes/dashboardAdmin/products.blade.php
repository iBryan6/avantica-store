<div class="tab-pane fade table-responsive mb-4" id="products" role="tabpanel" aria-labelledby="products-tab">
    <h2>PRODUCTS</h2>
    <table class="table table-hover table-bordered" id="products-table" style="width:100%">
        <thead class="theadColor">
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Type</th>
                <th>Category</th>
                <th>Stock</th>
                <th>Price</th>
            </tr>
        </thead>
    </table>
    <button type="button" class="btn btn-dark mt-4 mb-4">Add Product</button>
</div>

<!-- MODAL -->
<div class="modal" id="productsModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">VIZIO 50” Class 4K Ultra HD (2160P) HDR Smart LED TV (D50x-G9)</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h5>IMAGES</h5>
                <div class="row">
                    <div class="col-md-3 col-6">
                        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    </div>
                    <div class="col-md-3 col-6">
                        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    </div>
                    <div class="col-md-3 col-6">
                        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    </div>
                    <div class="col-md-3 col-6">
                        <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger float-left">Delete Product</button>
                <button type="button" class="btn btn-warning">Edit Product</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

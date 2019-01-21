<div class="tab-pane fade table-responsive" id="products" role="tabpanel" aria-labelledby="products-tab">
    <h2>PRODUCTS</h2>
    <table class="table table-hover">
        <thead class="dashboard-thead">
            <tr>
                <th scope="col">Code</th>
                <th scope="col">Name</th>
                <th scope="col">Brand</th>
                <th scope="col">Type</th>
                <th scope="col">Category</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Discount</th>
            </tr>
        </thead>
        <tbody>
            <tr data-toggle="modal" data-id="1" data-target="#productsModal">
                <th scope="row">1651220FD</th>
                <td>VIZIO 50” Class 4K Ultra HD (2160P) HDR Smart LED TV (D50x-G9)</td>
                <td>VIZIO</td>
                <td>Tv's</td>
                <td>Electronics</td>
                <td>150</td>
                <td>$298.00</td>
                <td>32%</td>
            </tr>
            <tr>
                <th scope="row">571555252</th>
                <td>Straight Talk Samsung Galaxy S8 Prepaid Smartphone (Limit 2) Sales of Prepaid Phones are restricted
                    to no more than (2) devices per customer within a 21-day period (across Brands)</td>
                <td>Samsung</td>
                <td>Cellphones</td>
                <td>Electronics</td>
                <td>1200</td>
                <td>$599.99</td>
                <td>0%</td>
            </tr>
            <tr>
                <th scope="row">1651220FD</th>
                <td>Dell G3 Gaming Laptop 15.6" Full HD, Intel Core i7-8750H, NVIDIA GeForce GTX 1050 Ti 4GB, 1TB HDD +
                    128GB SSD, 8GB RAM, Windows 10 - Alpine White - G3579-7054WHT Gaming bundle included</td>
                <td>Dell</td>
                <td>Laptops</td>
                <td>Electronics</td>
                <td>150</td>
                <td>$829.99</td>
                <td>7%</td>
            </tr>
        </tbody>
    </table>
    <button type="button" class="btn btn-dark">Add Product</button>
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

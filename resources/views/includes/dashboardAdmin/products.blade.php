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
                <td>Straight Talk Samsung Galaxy S8 Prepaid Smartphone (Limit 2) Sales of Prepaid Phones are restricted to no more than (2) devices per customer within a 21-day period (across Brands)</td>
                <td>Samsung</td>
                <td>Cellphones</td>
                <td>Electronics</td>
                <td>1200</td>
                <td>$599.99</td>
                <td>0%</td>
            </tr>
            <tr>
                <th scope="row">1651220FD</th>
                <td>Dell G3 Gaming Laptop 15.6" Full HD, Intel Core i7-8750H, NVIDIA GeForce GTX 1050 Ti 4GB, 1TB HDD + 128GB SSD, 8GB RAM, Windows 10 - Alpine White - G3579-7054WHT Gaming bundle included</td>
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
<div class="modal" id="distributorModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Mark Otto</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="https://via.placeholder.com/150x150" alt="profile pic" class="rounded-circle">
                    </div>
                    <div class="col-md-8 order-details">
                        <p>Email: <span>Mark_Otto@gmail.com</span></p>
                        <p>Phone Number: <span>+591 72700090</span></p>
                        <p>City: <span>Cochabamba</span></p>
                        <p>Office Hours: <span>8:00 AM - 6:00 PM</span></p>
                        <p>Orders Today: <span>2</span></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger float-left">Delete Distributor</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
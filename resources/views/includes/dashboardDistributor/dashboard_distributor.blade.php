<div class="tab-pane fade show active table-responsive" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <h2>PENDING ORDER</h2>
        <table class="table table-hover">
            <thead class="dashboard-thead">
                <tr>
                    <th scope="col">Order Code</th>
                    <th scope="col">Client</th>
                    <th scope="col">Address</th>
                    <th scope="col">Total</th>
                    <th scope="col">Products</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark Otto</td>
                    <td>Las Lomas Avenue #123</td>
                    <td>$195</td>
                    <th><button class="btn btn-secondary" data-toggle="modal" data-id="1" data-target="#orderModal">View Order</button></th>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton St. #432</td>
                    <td>$100</td>
                    <th><button class="btn btn-secondary">View Order</button></th>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>Cine Center</td>
                    <td>$873</td>
                    <th><button class="btn btn-secondary">View Order</button></th>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- MODAL -->
    <div class="modal" id="orderModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Order 1</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                Chocolatada PIL : 3
                                            </button>
                                        </h5>
                                    </div>
    
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Unit price : $2.99</p>
                                            <p>Section :  Milks</p>
                                            <p>Mark : PIL Andina</p>
                                            <p>Warnings : Keep cold</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Apple : 10
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                                <p>Unit price : $0.99</p>
                                                <p>Section :  Fruits</p>
                                                <p>Mark : N/A</p>
                                                <p>Warnings : Keep on a fresh spot</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Man Jeans : 1
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                                <p>Unit price : $199</p>
                                                <p>Section :  Cloths</p>
                                                <p>Mark : Jennifer Lopez</p>
                                                <p>Warnings : N/A</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 order-details">
                            <p>Status: <span>Pending</span></p>
                            <p>Client: <span>Mark</span></p>
                            <p>Phone: <span>+591123456</span></p>
                            <p>Total: <span>$195</span></p>
                            <p>Paying with: <span>$200</span></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger">Complete Order</button>
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
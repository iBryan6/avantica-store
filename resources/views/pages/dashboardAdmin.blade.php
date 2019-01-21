@extends('layouts.dashboards')

@section('content')
<section class="admin-dashboard">
    <div class="row">
        <div class="col-sm">
            <div class="dropdown">
                <button class="dropdown-toggle logged-text" id="dropdownText" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Logged in as Admin Bryan
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownText">
                    <a href="/"><button class="dropdown-item" type="button">Log Out</button></a>

                </div>
            </div>
        </div>
    </div>

    <!-- TABS -->
    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard"
                aria-selected="true">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="distributors-tab" data-toggle="tab" href="#distributors" role="tab" aria-controls="distributors"
                aria-selected="false">Distributors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="products-tab" data-toggle="tab" href="#products" role="tab" aria-controls="products"
                aria-selected="false">Products</a>
        </li>
    </ul>

    <!-- TABLES -->
    <div class="tab-content" id="dashboardTab">
        <!-- DASHBOARD -->
        <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <h2>LAST ORDERS</h2>
            <table class="table table-hover">
                <thead class="dashboard-thead">
                    <tr>
                        <th scope="col">Order Code</th>
                        <th scope="col">Client</th>
                        <th scope="col">Distributor</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-toggle="modal" data-id="1" data-target="#orderModal">
                        <th scope="row">1</th>
                        <td>Mark Otto</td>
                        <td>Jack Nicholson</td>
                        <td style="color:green;">Completed</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td style="color:red;">Pending</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>The Bird</td>
                        <td style="color:red;">Pending</td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary">Search Order</button>
        </div>

        <!-- DISTRIBUTORS -->
        <div class="tab-pane fade" id="distributors" role="tabpanel" aria-labelledby="distributors-tab">
            <h2>DISTRIBUTORS</h2>
        </div>

        <!-- PRODUCTS -->
        <div class="tab-pane fade" id="products" role="tabpanel" aria-labelledby="products-tab">

        </div>
    </div>

    <!-- MODAL -->
    <div class="modal" id="orderModal">
        <div class="modal-dialog">
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
                                                Product #1
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis
                                            laudantium ipsam nihil temporibus, asperiores assumenda adipisci omnis
                                            ipsum nulla. Soluta deserunt quisquam itaque esse assumenda ipsam quae
                                            consectetur? Odio, quam.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Product #2
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut doloribus
                                            eaque vero id debitis in magni recusandae repellendus voluptatibus eveniet
                                            at aspernatur sequi veritatis, deserunt dolorem, illo sint unde alias!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Product #3
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nobis
                                            nesciunt at odit ipsa facilis praesentium tempora itaque, dolorem deleniti
                                            exercitationem? Culpa, architecto repellendus? Repellendus molestiae nulla
                                            nihil blanditiis earum!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 order-details">
                            <p>Status: <span>Completed</span></p>
                            <p>Client: <span>Mark</span></p>
                            <p>Distributor: <span>Jack</span></p>
                            <p>Total: <span>$ 1800.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection

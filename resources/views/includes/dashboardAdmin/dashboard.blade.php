<div class="tab-pane fade show active table-responsive" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
    <h2>LAST ORDERS</h2>
    <table id="myTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        {{-- @foreach ($users as $username)
        <tbody>
            <tr>
                <td>{{$username->name}}</td>
            </tr>
        </tbody>
        @endforeach --}}
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
                <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

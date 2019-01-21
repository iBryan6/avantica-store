<div class="tab-pane fade table-responsive" id="distributors" role="tabpanel" aria-labelledby="distributors-tab">
    <h2>DISTRIBUTORS</h2>
    <table class="table table-hover">
        <thead class="dashboard-thead">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">City</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
            </tr>
        </thead>
        <tbody>
            <tr data-toggle="modal" data-id="1" data-target="#distributorModal">
                <th scope="row">1</th>
                <td>Mark Otto</td>
                <td>Cochabamba</td>
                <td>Mark_Otto@gmail.com</td>
                <td>+591 72700090</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob Thornton</td>
                <td>Cochabamba</td>
                <td>JThornton6@gmail.com</td>
                <td>+591 72704533</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
                <td>Cochabamba</td>
                <td>LtBird@gmail.com</td>
                <td>+591 72751090</td>
            </tr>
        </tbody>
    </table>
    <button type="button" class="btn btn-dark">Add Distributor</button>
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

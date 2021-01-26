<x-admin-base nosidebar title="Customer Details" item2="Customers" link2="{{ route('admin.customers.index') }}">
<div class="row">
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item  align-items-center">
              <h3>Shibaji Debnath</h3>
              <p>Last Login: Not Login Yet</p>
            </li>
        </ul>
        <ul class="list-group mt-4">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Invoices
              <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Transactions
              <span class="badge badge-primary badge-pill">2</span>
            </li>
        </ul>
        <ul class="list-group mt-4">
            <li class="list-group-item  align-items-center">
              <h4>Email</h4>
              <p>imshibaji@gmail.com</p>
            </li>
            <li class="list-group-item align-items-center">
              <h4>Phone</h4>
              <p>+91 8981009499</p>
            </li>
            <li class="list-group-item align-items-center">
                <h4>Tax Number</h4>
                <p>3456789567890</p>
            </li>
            <li class="list-group-item align-items-center">
                <h4>Address</h4>
                <p>Dum Dum Cantonment. Kolkata-700028</p>
            </li>
            <li class="list-group-item align-items-center">
                <h4>Referance</h4>
                <p>ABHI-123</p>
            </li>
        </ul>
        <div class="my-3">
            <a href="" class="btn btn-primary btn-block">
               <i class="fas fa-pen"></i> Edit
            </a>
        </div>
    </div>
    <div class="col-md-9">
        <div class="row">
            <x-admin-helpdesk title="Paid" price="₹3,45,678" icon="edit" percent="2.4%" />
            <x-admin-helpdesk title="Open Invoices" price="₹100" icon="edit-2" color="warning" updown="down" />
            <x-admin-helpdesk title="Overdue Invoices" price="₹20,000" icon="edit-3" color="danger" />
        </div>
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#transactions" role="tab" aria-controls="transactions" aria-selected="true">Transactions</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#invoices" role="tab" aria-controls="invoices" aria-selected="false">Invoices</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="transactions" role="tabpanel">
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Category</th>
                                    <th>Account</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">19th Jan 2021</td>
                                        <td>Rs. 220</td>
                                        <td>Sales</td>
                                        <td>Cash</td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="invoices" role="tabpanel">
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Number</th>
                                    <th>Amount</th>
                                    <th>Invoice Date</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">INV-12334</td>
                                    <td>Rs. 220</td>
                                    <td>19th Jan 2021</td>
                                    <td>21th Jan 2021</td>
                                    <td>Paid</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-admin-base>

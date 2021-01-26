<x-admin-base title="Edit Revenue" nosidebar item2="Revenues List" link2="{{route('admin.revenues.index')}}">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <x-admin-input col="md-6" type="date" name="Date" fname="paid_at" required />
                <x-admin-input col="md-6" type="number" name="Amount" fname="amount" required />
                <x-admin-select col="md-6" name="Account" fname="account_id">
                    <x-slot name="option">
                        <option value="1">Cash</option>
                        <option value="2">Bank</option>
                    </x-slot>
                    <x-slot name="addBtn">
                        <x-admin-modal btnname="New Account" type="outline-primary" title="Add New Account" action="/admin/accounts" method="POST">
                            <div class="form-row">
                                <x-admin-input col="6" name="Name" required fname="name" />
                                <x-admin-input col="6" name="Number" required fname="number" />
                                <x-admin-select col="6" name="Currency" required fname="currency_code">
                                    @slot('option')
                                        <option value="INR">Indian Rupees</option>
                                        <option value="USD">United American Doller</option>
                                    @endslot
                                </x-admin-select>
                                <x-admin-input col="6" name="Opening Balance" required fname="opening_balance" value="0.00" />
                            </div>
                            <x-slot name="footer">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </x-slot>
                        </x-admin-modal>
                    </x-slot>
                </x-admin-select>

                <x-admin-select col="md-6" name="Customer" fname="customer_id">
                    <x-slot name="option">
                        <option value="0">Select Customer</option>
                        <option value="1">Mr. A</option>
                        <option value="2">Mr. B</option>
                    </x-slot>
                    <x-slot name="addBtn">
                        <x-admin-modal btnname="New Customer" type="outline-primary" title="Add New Customer" action="/admin/customers" method="POST">
                            <div class="form-row">
                                <x-admin-input col="6" name="Name" required fname="name" />
                                <x-admin-input col="6" name="Email" type="email" required fname="email" />
                                <x-admin-input col="6" name="Tax Number" required />
                                <x-admin-select col="6" name="Currency" required fname="currency_code">
                                    @slot('option')
                                        <option value="INR">Indian Rupees</option>
                                        <option value="USD">United American Doller</option>
                                    @endslot
                                </x-admin-select>
                                <x-admin-textarea name="Address" fname="address" />
                            </div>
                            <x-slot name="footer">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </x-slot>
                        </x-admin-modal>
                    </x-slot>
                </x-admin-select>

                <x-admin-textarea name="Description" />

                <x-admin-select col="md-6" name="Category" fname="category_id">
                    <x-slot name="option">
                        <option value="1">Deposit</option>
                        <option value="2">Sale</option>
                    </x-slot>
                    <x-slot name="addBtn">
                        <x-admin-modal btnname="Add New" type="outline-primary" title="Add New" action="/admin/categories" method="POST">
                            <div class="form-row">
                                <x-admin-input col="6" name="Name" required fname="name" />
                                <x-admin-input col="6" name="Colour" type="color" required fname="colour" value="#1761fd" />
                            </div>
                            <x-slot name="footer">
                                <button class="btn btn-success" type="submit">Submit</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </x-slot>
                        </x-admin-modal>
                    </x-slot>
                </x-admin-select>

                <x-admin-select col="md-6" name="Recurring" fname="recurring_id">
                    @slot('option')
                        <option value="no">No</option>
                        <option value="daily">Daily</option>
                        <option value="weekly">Weekly</option>
                        <option value="monthly">Monthly</option>
                        <option value="yearly">Yearly</option>
                    @endslot
                </x-admin-select>

                <x-admin-input col="md-6" required name="Payment Method">
                    @slot('option')
                        <option value="cash">Cash</option>
                        <option value="bank">Bank</option>
                        <option value="upi">UPI</option>
                    @endslot
                </x-admin-input>

                <x-admin-input col="md-6" name="Referance" />
                <x-admin-input col="md-6" name="Attachment" type="file" />
                <x-admin-input col="md-6" name="Invoice" disabled />
            </div>
            <div class="btn-group">
                <button class="btn btn-success" type="submit">Submit</button>
                <button class="btn btn-secondary" type="button">Close</button>
            </div>
        </div>
    </div>
</x-admin-base>

<x-admin-base nosidebar title="New Reconciliation" item2="All Reconciliations" link2="{{ route('admin.reconciliations.index') }}">
<form action="" method="post">
<div class="card">
    <div class="card-body">
        <div class="row">
            <x-admin-input col="md-3" type="date" name="Start Date" required />
            <x-admin-input col="md-3" type="date" name="End Date" required />
            <x-admin-input col="md-2" name="Closing Balance" required />
            <x-admin-select col="md-2" name="Account" fname="account_id" required>
                <x-slot name="option">
                    @foreach ($accounts as $account)
                        <option value="{{$account->id}}">{{$account->name}}</option>
                    @endforeach
                </x-slot>
            </x-admin-select>
            <div class="col-md-2 my-auto">
                <button class="btn btn-success btn-block" type="submit">
                    Transactions
                </button>
            </div>
        </div>
    </div>
</div>
</form>

<form action="" method="post">
    <div class="card">
        <div class="card-header">
            <h4>Transactions</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Contact</th>
                        <th>Deposit</th>
                        <th>Withdrawal</th>
                        <th>Clear</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>09 Jan 2021</td>
                        <td>&nbsp;</td>
                        <td>Ajay</td>
                        <td>700</td>
                        <td>&nbsp;</td>
                        <td><input type="checkbox" value="clear"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</form>

</x-admin-base>

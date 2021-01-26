<x-admin-base title="Invoice: #{{$invoice->invoice_number}}" nosidebar item2="Invoices" link2="{{route('admin.invoices.index')}}">
   <div class="row">
       <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-info">
                <h5 class="text-light">Draft</h5>
            </div>
            <div class="card-body">
                @include('admin::sales.invoices.print')
            </div>
        </div>
       </div>
       <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <a href="{{route('admin.invoices.index')}}" class="btn btn-classic btn-block">Return to List</a>
            </div>
            <div class="card-body text-center">
                <div class="btn-group">
                    <a href="{{route('admin.invoices.edit', $invoice->id)}}" class="btn btn-primary">Edit</a>
                    <a target="_blank" href="{{route('admin.invoices.print', $invoice->id)}}" class="btn btn-success">Print</a>
                    <button class="btn btn-secondary">Download PDF</button>
                    <a href="{{route('admin.invoices.index')}}" class="btn btn-warning">Cancel</a>
                    <button class="btn btn-danger">Refund</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <x-admin-activity />
            </div>
        </div>
        <div class="card">
            <div class="card-body text-center">
                <div class="btn-group">
                    <a href="{{route('admin.invoices.edit', $invoice->id)}}" class="btn btn-primary">Edit</a>
                    <a target="_blank" href="{{route('admin.invoices.print', $invoice->id)}}" class="btn btn-success">Print</a>
                    <button class="btn btn-secondary">Download PDF</button>
                    <button class="btn btn-warning">Cancel</button>
                    <button class="btn btn-danger">Refund</button>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{route('admin.invoices.index')}}" class="btn btn-classic btn-block">Return to List</a>
            </div>
        </div>
       </div>
   </div>

</x-admin-base>

<x-admin-base title="Edit Invoice" nosidebar item2="Invoices" link2="{{ route('admin.invoices.index') }}">
<form action="{{route('admin.invoices.update', $invoice->id)}}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$invoice->id}}">
    <div class="card">
        <div class="card-body">

            {{$errors->any()}}

            <div class="row">
                {{$invoice->contact}}
                <x-admin-select required col="md-6" name="Customer" fname="contact_id">
                    <x-slot name="option">
                        <option value="">Select Customer</option>
                        @foreach ($customers as $contact)
                            <option @if($invoice->contact_id == $contact->id) selected @endif value="{{$contact->id}}">{{$contact->name}}</option>
                        @endforeach
                    </x-slot>
                    <x-slot name="addBtn">
                        <a href="{{route('admin.contacts.create',['type'=>'customer'])}}" class="btn btn-outline-primary">New Customer</a>
                    </x-slot>
                </x-admin-select>

                <x-admin-select col="md-6" name="Currency" required fname="currency_code">
                    @slot('option')
                        <option @if ($invoice->currency_code == 'INR') selected @endif value="INR">Indian Rupees</option>
                        <option @if ($invoice->currency_code == 'USD') selected @endif value="USD">United American Doller</option>
                    @endslot
                    @slot('addBtn')
                        <a href="{{route('admin.currencies.create',['type'=>'customer'])}}" class="btn btn-outline-primary">New Currency</a>
                    @endslot
                </x-admin-select>

                <x-admin-input col="md-6" name="Invoice Date" required type="date" value="{{ date('Y-m-d', strtotime($invoice->invoiced_at)) }}" />
                <x-admin-input col="md-6" name="Due Date" required type="date" value="{{ date('Y-m-d', strtotime($invoice->due_at))}}" />
                <x-admin-input col="md-6" name="Invoice Number" required value="{{$invoice->invoice_number}}" />
                <x-admin-input col="md-6" name="Order Number" value="{{$invoice->order_number}}" />

                <livewire:admin-invoice :items="$invoice->items" :roundup="$invoice->round_up" :discount="$invoice->discount_percent" />

                <x-admin-textarea col="md-6" name="Notes" value="{{$invoice->notes}}" />
                <x-admin-textarea col="md-6" name="Footer" value="{{$invoice->footer}}" />

                <x-admin-select col="md-6" name="Category" required fname="category_id">
                    @slot('option')
                        <option value="">Select Option</option>
                        <option @if ($invoice->category_id == 1) selected @endif value="1">Sale</option>
                        <option @if ($invoice->category_id == 2) selected @endif value="2">Item</option>
                    @endslot
                    @slot('addBtn')
                        <a href="{{route('admin.categories.create',['type'=>'customer'])}}" class="btn btn-outline-primary">New Categories</a>
                    @endslot
                </x-admin-select>
                {{-- <x-admin-select col="md-6" name="Recurring"> --}}
                    {{-- @slot('option') --}}
                        {{-- <option value="no">No</option> --}}
                        {{-- <option value="daily">Daily</option> --}}
                        {{-- <option value="weekly">Weekly</option> --}}
                        {{-- <option value="monthly">Monthly</option> --}}
                        {{-- <option value="yearly">Yearly</option> --}}
                    {{-- @endslot --}}
                {{-- </x-admin-select> --}}
            </div>
        </div>
        <div class="card-footer text-right">
            <div class="btn-group">
                <button class="btn btn-success" type="submit">Submit</button>
                <a href="{{route('admin.invoices.index')}}" class="btn btn-secondary">Close</a>
            </div>
        </div>
    </div>
</form>
</x-admin-base>

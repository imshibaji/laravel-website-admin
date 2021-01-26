<div class="print-area">
    <table class="table" style="width: 100%; margin:0px;">
        <thead>
            <tr>
                <th style="width: 70%">
                    <div class="row">
                        {{--<div class="col-4 align-middle my-auto">
                            <img src="{{ business()->imgUrl() ?? '' }}" width="100%" height="80px" />
                        </div> --}}
                        <div class="col-8" style="text-align: left">
                            <h3>{{business()->name}}</h3>
                            <p>{{business()->address}}, {{business()->city}}, {{business()->state}}, {{business()->pincode}}, {{business()->country}}</p>
                            <p>
                                Registration No: {{ business()->registration_no }}<br/>
                                Tax Number: {{business()->tax_registration_no}}<br/>
                                Email: {{business()->email}}, Contact No: {{business()->contact_no}}
                            </p>
                        </div>
                    </div>
                </th>
                <th class="text-right align-middle" style="text-align: right">
                    <h2>Invoice</h2>
                    <p>
                        Invoiced Number: #{{$invoice->invoice_number}}
                        @if($invoice->order_number != null)<br/> Order Number: {{$invoice->order_number}} @endIf
                    </p>
                    <p>
                        Invoiced Date: {{ dtformat('dS M Y' ,$invoice->invoiced_at) }}<br/>
                        Payment Due: {{ dtformat('dS M Y' , $invoice->due_at) }}
                    </p>
                </th>
            </tr>
            <tr>
                <th style="text-align: left">
                    <h4 style="padding: 0px; margin: 0px">Bill To:</h4>
                    <p>
                        <strong>Name:</strong> {{$invoice->contact_name}}<br/>
                        <strong>Address:</strong> {{$invoice->contact_address}}.<br/>
                        <strong>Email:</strong> {{$invoice->contact_email}}<br/>
                        <strong>Phone:</strong> {{$invoice->contact_phone}}<br/>
                    </p>
                </th>
                <th class="my-auto">
                    <p style="text-align: left">
                        <strong>Tax Number:</strong><br/> {{ $invoice->contact_tax_number }}<br/>
                    </p>
                </th>
            </tr>
    </table>
    <table class="table" style="width: 100%">
        <thead>
            <tr>
                <th style="width: 40%">Items</th>
                <th style="text-align: center">Quantity</th>
                <th style="text-align: center">Price</th>
                <th style="text-align: center">Tax %</th>
                <th style="text-align: center">Tax Amt</th>
                <th style="text-align: right">Total</th>
            </tr>
        </thead>
        <tbody>
        @php
            $subtotal = 0;
            $totaltax = 0;
        @endphp
            @foreach($invoice->items as $item)
            @php
                $subtotal += $item->total;
                $totaltax += $item->taxamt;
            @endphp
            <tr>
                <td>
                    <div class="h6">{{$item->name}}</div>
                    <p>{{$item->item->description ?? ''}}</p>
                </td>
                <td style="text-align: center">
                    {{$item->quantity ?? 1}}
                </td>
                <td style="text-align: center">
                    ₹{{$item->price}}
                </td>
                <td style="text-align: center">
                    {{$item->taxprcnt}}%
                </td>
                <td style="text-align: center">
                    ₹{{$item->taxamt}}
                </td>
                <td style="text-align: right">
                    ₹{{$item->total}}
                </td>
            </tr>
            @endforeach
            <tr>
                <td rowspan="5" colspan="4">
                    Notes: {{$invoice->notes}}
                </td>
                <td>Subtotal</td>
                <td style="text-align: right">
                    ₹{{$subtotal}}
                </td>
            </tr>
            <tr>
                {{-- <td colspan="4">&nbsp;</td> --}}
                <td>Discount</td>
                <td style="text-align: right">
                    ₹{{$invoice->discount_amount}}
                </td>
            </tr>
            <tr>
                {{-- <td colspan="4">&nbsp;</td> --}}
                <td>Total Tax</td>
                <td style="text-align: right">
                    ₹{{$invoice->total_tax_amt}}
                </td>
            </tr>
            <tr>
                {{-- <td colspan="4">&nbsp;</td> --}}
                <td>Round up</td>
                <td style="text-align: right">
                    ₹{{$invoice->round_up}}
                </td>
            </tr>
            <tr>
                {{-- <td colspan="4">&nbsp;</td> --}}
                <td>Total Amount</td>
                <td style="text-align: right">
                    ₹{{$invoice->total_amount}}
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6" style="text-align: center">{{$invoice->footer ?? 'Thank you for your business.'}}</td>
            </tr>
        </tfoot>
    </table>
</div>

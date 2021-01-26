<div id="item-list" class="col-md-12">
    <h4>Items</h4>
    <div class="table-responsive">
        <div class="repeater-custom-show-hide">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10%">Actions</th>
                        <th style="width: 30%">Name</th>
                        <th style="width: 10%; text-align: center">Quantity</th>
                        <th style="width: 10%; text-align: center">Price</th>
                        <th style="width: 10%; text-align: center">Tax</th>
                        <th style="width: 10%; text-align: center">Taxable</th>
                        <th style="width: 20%; text-align: center">Total Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $k => $i)
                        <tr>
                            <td>
                                <span wire:click="deleteItem({{$k}})" class="btn btn-gradient-danger btn-sm">
                                    <span class="far fa-trash-alt mr-1"></span> Delete
                                </span>
                            </td>
                            <td>
                                <input type="hidden" name="items[{{$k}}][id]" value="{{$i['id']}}" />
                                <input type="text" readonly name="items[{{$k}}][name]" class="form-control" value="{{$i['name']}}" />
                            </td>
                            <td>
                                <input type="number" readonly name="items[{{$k}}][quantity]" value="{{$i['quantity']}}" class="text-center form-control">
                            </td>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₹</span>
                                    </div>
                                    <input type="text" readonly name="items[{{$k}}][price]" value="{{$i['price']}}" class="text-right form-control">
                                </div>
                            </td>
                            <td>
                                <div class="input-group">
                                    <input type="text" readonly name="items[{{$k}}][taxprcnt]" value="{{$i['taxprcnt']}}" class="text-right form-control">
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₹</span>
                                    </div>
                                    <input type="text" readonly name="items[{{$k}}][taxamt]" value="{{$i['taxamt']}}" class="text-right form-control">
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">₹</span>
                                    </div>
                                    <input type="text" readonly name="items[{{$k}}][total]" value="{{$i['total']}}" class="text-right form-control">
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

                <tbody>
                    <tr>
                        <td>
                            <span wire:click="addItem" class="btn btn-gradient-secondary btn-md">
                                <span class="fa fa-plus"></span> Add
                            </span>
                        </td>
                        <td>
                            <div class="input-group">
                                <select wire:model="item.id" wire:change="chooseItem" class="form-control">
                                    <option value="">Choose Item</option>
                                    @foreach ($dataitems as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                    @endforeach
                                </select>
                                <div class="input-group-append">
                                    <a href="{{route('admin.items.create',['page'=>'admin.bills.create'])}}" class="btn btn-outline-primary">New Item</a>
                                </div>
                            </div>

                        </td>
                        <td>
                            <input type="text" wire:model="item.quantity" wire:keyup="update" value="1" class="text-center form-control">
                        </td>
                        <td><input type="text" wire:model="item.price" wire:keyup="update" value="0" class="text-right form-control"></td>
                        <td>
                            <div class="input-group">
                                <input type="text" wire:model="item.taxprcnt" wire:keyup="update" value="0" class="text-right form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₹</span>
                                </div>
                                <input type="text" readonly value="{{$itemtax ?? '0.00'}}" class="text-right form-control">
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₹</span>
                                </div>
                                <input type="text" readonly value="{{$itemtotal ?? '0.00'}}" class="text-right form-control">
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-right" colspan="6"><strong>Subtotal</strong></td>
                        <td class="text-right">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₹</span>
                                </div>
                                <input type="text" name="subtotal_amount" readonly class="text-right form-control" value="{{ $subtotal ?? '0.00'}}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="5">Add Discount</td>
                        <td class="text-right">
                            <div class="input-group">
                                <input type="number" name="discount_percent" wire:model="discount" wire:keyup="update" value="0" class="text-right form-control" />
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </td>
                        <td class="text-right">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₹</span>
                                </div>
                                <input type="text" name="discount_amount" readonly class="text-right form-control" value="{{ $discountTotal ?? '0.00'}}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="6"><strong>Tax</strong></td>
                        <td class="text-right">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₹</span>
                                </div>
                                <input type="text" name="total_tax_amt" readonly class="text-right form-control" value="{{ $tax ?? '0.00' }}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="6"><strong>Round Up</strong></td>
                        <td class="text-right">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₹</span>
                                </div>
                                <input type="text" name="round_up" wire:model="roundup" wire:keyup="update" class="text-right form-control" value="{{ $roundup ?? '0.00' }}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="6"><strong>Total</strong></td>
                        <td class="text-right">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">₹</span>
                                </div>
                                <input type="text" name="total_amount" readonly class="text-right form-control" value="{{$total ?? '0.00'}}">
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div> <!--end repeter-->
    </div>
</div>

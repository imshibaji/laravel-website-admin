<?php

namespace Shibaji\Admin\Http\Livewire;

use Exception;
use Livewire\Component;
use Shibaji\Admin\Models\Common\Item;

class Bill extends Component
{
    public $dataitems; // Use as Input Paramiter
    public $items;
    public $item = [
        'id' => 0,
        'name' => '',
        'quantity' => 1,
        'price' => 0,
        'taxprcnt' => 0,
        'taxamt' => 0,
        'total' => 0
    ];
    public $itemtax = 0;
    public $itemtotal = 0;
    public $subtotal = 0;
    public $discount = 0;
    public $discountTotal = 0;
    public $tax = 0;
    public $roundup = 0;
    public $total = 0;

    protected $rules = [
        'item.name' => 'required',
    ];

    public function __construct()
    {
        $this->dataitems = $this->dataitems ?? Item::all();
    }

    public function mount(){
        $this->items = ($this->items)? $this->items->toArray() : [];

        $this->update();
    }

    public function chooseItem(){
        $item = Item::find($this->item['id']);
        if($item){
            $this->item['id'] = $item->id;
            $this->item['name'] = $item->name;
            $this->item['price'] = $item->sale_price;
            $this->item['taxprcnt'] = $item->tax();
            // debug('Choose Item', $item);
            $this->update();
        }else{
            $this->resetData();
        }
    }

    public function resetData(){
        $this->item = [
            'id' => 0,
            'name' => '',
            'quantity' => 1,
            'price' => 0,
            'taxprcnt' => 0,
            'taxamt' => 0,
            'total' => 0
        ];
        $this->itemtax = 0;
        $this->itemtotal = 0;
    }
    public function update(){
        try{
            $total= ($this->item['quantity'] ?? 0) * ($this->item['price']?? 0);
            $tax = (isset($this->item['taxprcnt']))? ($total * $this->item['taxprcnt']/100) : 0;
            $this->item['total'] = $total;

            $this->itemtax = $tax;
            $this->itemtotal = $total+$tax;

            $this->calculate();
        }catch(Exception $e){
            debug($e);
        }
    }

    public function addItem(){
        $this->validate();
        try{
            $total= $this->item['quantity'] * $this->item['price'];
            $tax = ($total * $this->item['taxprcnt']/100);
            $this->item['taxamt'] = $tax;
            // $this->item['total'] = $total + ($total * $this->item['tax']/100);
            // dd($this->item);
            array_push($this->items, $this->item);

            $this->resetData();
            $this->calculate();
        }catch(Exception $e){
            debug($e);
        }
    }

    public function updateItem($key, $item){
        array_splice($this->items, $key, 1, $item);
    }

    public function deleteItem($key){
        unset($this->items[$key]);
        $this->update();
    }

    // Invoice Calculation
    public function calculate(){
        $subtotal = 0;
        $taxable = 0;
        $taxablediscount =0;
        foreach($this->items as $item){
            // All Items Total
            $subtotal = $subtotal + (double) $item['total'];
            // All tax Total
            $taxable = $taxable +  (double) $item['taxamt'];

            // View All Sub Total
            $this->subtotal = $subtotal;

            // Subtotal Discount the Taxable Discount
            $discount = ($subtotal * ((double)$this->discount / 100));
            $taxablediscount = ($taxable * ((double)$this->discount / 100));

            // Substract  Taxable Discount from Taxable
            $this->tax = ($taxable - $taxablediscount);

            // Display Acutal Discount
            $this->discountTotal = $discount;

            // Final Total calculation
            $total = ($subtotal - ($discount + $taxablediscount)) + $taxable;
            $this->total = $total + $this->roundup;
        }
    }

    public function render()
    {
        return view('admin::livewire.bill');
    }
}

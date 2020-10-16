<?php

namespace Shibaji\Admin\Http\Livewire;

use Livewire\Component;



class Counter extends Component
{
    public $count = 0;
    public $name = '';

    public function increment()
    {
        $this->count++;
    }
    public function render()
    {
        return view('admin::livewire.counter');
    }
}

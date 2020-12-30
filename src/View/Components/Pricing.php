<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Pricing extends Component
{
    public $popular;
    public $title;
    public $price;
    public $per;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title = 'Basic Plan',
        $price = '$20',
        $per = 'per Month',
        $popular = null
    )
    {
        $this->title = $title;
        $this->price = $price;
        $this->per = $per;
        $this->popular = $popular;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.pricing');
    }
}

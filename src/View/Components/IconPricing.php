<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class IconPricing extends Component
{
    public $popular;
    public $title;
    public $per;
    public $price;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title = 'Basic Plan',
        $per = 'Per Month',
        $price = '$20',
        $popular = null
    )
    {
        $this->title = $title;
        $this->per = $per;
        $this->price = $price;
        $this->popular = $popular;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.icon-pricing');
    }
}

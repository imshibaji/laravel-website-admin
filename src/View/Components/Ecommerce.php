<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Ecommerce extends Component
{
    public $dataF;
    public $iconClass;
    public $price;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $dataF = 'shopping-cart',
        $iconClass = 'align-self-center icon-lg icon-dual-pink',
        $price = '$10K',
        $title = 'New Orders'
    )
    {
        $this->dataF = $dataF;
        $this->iconClass = $iconClass;
        $this->price = $price;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.ecommerce');
    }
}

<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Hospital extends Component
{
    public $title;
    public $icon;
    public $price;
    public $extra;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title = 'New Admit',
        $icon = 'las la-bed text-warning font-40',
        $price = '50',
        $extra = 'Yesterday 32 Add.'
    )
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->price = $price;
        $this->extra = $extra;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.hospital');
    }
}

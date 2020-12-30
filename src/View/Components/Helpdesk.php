<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Helpdesk extends Component
{

    public $title;
    public $feather;
    public $iconClaass;
    public $price;
    public $percentage;
    public $updown;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title = 'Open Tickets',
        $feather = 'book-open',
        $iconClaass = 'align-self-center icon-lg icon-dual-success',
        $price = '21',
        $percentage = '2.6%',
        $updown = 'up'
    )
    {
        $this->title = $title;
        $this->feather = $feather;
        $this->iconClaass = $iconClaass;
        $this->price = $price;
        $this->percentage = $percentage;
        $this->updown = $updown;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.helpdesk');
    }
}

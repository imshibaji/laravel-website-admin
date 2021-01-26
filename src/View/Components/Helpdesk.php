<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Helpdesk extends Component
{

    public $title;
    public $icon;
    public $color;
    public $price;
    public $percent;
    public $updown;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title = 'Open Tickets',
        $icon = 'book-open',
        $color = 'success',
        $price = '21',
        $percent = '2.6%',
        $updown = 'up'
    )
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->color = $color;
        $this->price = $price;
        $this->percent = $percent;
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

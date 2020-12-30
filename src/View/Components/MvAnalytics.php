<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class MvAnalytics extends Component
{
    public $title;
    public $price;
    public $updown;
    public $percentage;
    public $desc;
    public $icon;
    public $iconClass;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title= 'Sessions',
        $price = '$2400',
        $updown = 'up',
        $percentage = '8.5%',
        $desc = 'New Sessions',
        $icon = 'headphones',
        $iconClass = 'align-self-center icon-dual-2'
    )
    {
        $this->title = $title;
        $this->price = $price;
        $this->updown = $updown;
        $this->percentage = $percentage;
        $this->desc = $desc;
        $this->icon = $icon;
        $this->iconClass = $iconClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.mv-analytics');
    }
}

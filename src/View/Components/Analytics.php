<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Analytics extends Component
{
    public $title;
    public $description;
    public $updown;
    public $chartclass;
    public $dataPeity;
    public $points;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title='Returning Customers',
        $description='Last Month : 150',
        $updown = 'up',
        $chartclass='peity-bar',
        $dataPeity='{ "fill": ["#4d79f62b", "#4d79f6"]}',
        $points='6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1'
    )
    {
        $this->title = $title;
        $this->description = $description;
        $this->updown = $updown;
        $this->chartclass = $chartclass;
        $this->dataPeity = $dataPeity;
        $this->points = $points;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.analytics');
    }
}

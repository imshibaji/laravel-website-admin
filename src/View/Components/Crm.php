<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Crm extends Component
{
    public $icon;
    public $iconClass;
    public $title;
    public $cost;
    public $isActive;
    public $progressClass;
    public $progressCost;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $icon = 'users',
        $iconClass = 'warning',
        $title = 'New Customer',
        $cost = '$20k',
        $isActive = null,
        $progressClass = 'warning',
        $progressCost = 55
    )
    {
        $this->icon = $icon;
        $this->iconClass = 'align-self-center icon-lg icon-dual-'. $iconClass;
        $this->title = $title;
        $this->cost = $cost;
        $this->isActive = $isActive;
        $this->progressClass = 'progress-bar bg-'. $progressClass;
        $this->progressCost = $progressCost;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.crm');
    }
}

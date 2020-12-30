<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Project extends Component
{
    public $iconClass;
    public $title;
    public $headClass;
    public $cost;
    public $isActive;
    public $pClass;
    public $pCost;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $iconClass = 'align-self-center icon-lg icon-dual-warning',
        $title = 'Projects',
        $headClass = 'd-inline-block',
        $cost = 48,
        $isActive = null,
        $pClass = 'progress-bar bg-success',
        $pCost = '48'
    )
    {
        $this->iconClass = $iconClass;
        $this->title = $title;
        $this->headClass = $headClass;
        $this->cost = $cost;
        $this->isActive = $isActive;
        $this->pClass = $pClass;
        $this->pCost = $pCost;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.project');
    }
}

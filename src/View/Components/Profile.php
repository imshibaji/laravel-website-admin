<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Profile extends Component
{
    public $title;
    public $iClass;
    public $count;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title = 'New Tickets',
        $count = 182,
        $iClass = 'fas fa-ticket-alt bg-soft-warning'
    )
    {
        $this->title = $title;
        $this->count = $count;
        $this->iClass = $iClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.profile');
    }
}

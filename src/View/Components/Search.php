<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Search extends Component
{

    public $datas;
    public $action;
    public $method;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $method='GET', $data = null)
    {
        $this->datas = $data;
        $this->action = $action;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('admin::components.search');
    }
}

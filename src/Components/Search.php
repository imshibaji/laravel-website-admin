<?php

namespace Shibaji\Admin\Components;

use Illuminate\View\Component;

class Search extends Component
{

    public $datas;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data = null)
    {
        $this->datas = $data;
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

<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Translate extends Component
{
    public $trans;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->trans = config('admin.top_right_menu.lang.sub_menus');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('admin::components.translate');
    }
}

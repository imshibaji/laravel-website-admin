<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class SwitchBtn extends Component
{
    public $name;
    public $fname;
    public $col;
    public $checked;
    public $color;
    public $disabled;
    public $url;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name = 'Label',
        $fname= null,
        $checked = null,
        $color='primary',
        $col = 12,
        $disabled = null,
        $url = ''
    )
    {
        $this->name = $name;
        $this->fname = $fname ?? $name;
        // $this->checked = ($checked == 'on' || $checked == 1) ? true : false;
        $this->checked = $checked;
        $this->color = $color;
        $this->col = $col;
        $this->disabled = $disabled;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.switch-btn');
    }
}

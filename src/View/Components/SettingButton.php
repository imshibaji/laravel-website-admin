<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class SettingButton extends Component
{
    public $title;
    public $desc;
    public $icon;
    public $link;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title = null,
        $desc = null,
        $icon = null,
        $link = null
    )
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->icon = $icon;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.setting-button');
    }
}

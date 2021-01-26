<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Base extends Component
{
    public $title;
    public $item2;
    public $link2;
    public $nosidebar;
    public $headers;
    public $css_plugins;
    public $headerStyle;
    public $styles;
    public $js_plugins;
    public $footerScript;
    public $scripts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title=null,
        $item2=null,
        $link2=null,
        $nosidebar=null
    )
    {
        $this->title = $title;
        $this->item2 = $item2;
        $this->link2 = $link2;
        $this->nosidebar = $nosidebar;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.base');
    }
}

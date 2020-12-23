<?php
namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $item1;
    public $link1;
    public $item2;
    public $link2;
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title="Admin", $item1=null, $link1='', $item2=null, $link2='')
    {
        $this->title = $title;
        $this->item1 = $item1;
        $this->link1 = $link1;
        $this->item2 = $item2;
        $this->link2 = $link2;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.breadcrumb');
    }
}

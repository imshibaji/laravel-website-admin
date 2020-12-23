<?php
namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public $type;
    public $title;
    public $size;
    public $btnname;
    public $footer;
    public $action;
    public $method;
    public $nobtn;
    public $modalId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $btnname='Demo Modal',
        $title='Modal Title',
        $type='primary',
        $size ='md',
        $action = false,
        $method = 'GET',
        $nobtn = false,
        $modalId = null
    )
    {
        $this->btnname = $btnname;
        $this->title = $title;
        $this->type = $type;
        $this->size = $size;
        $this->action = $action;
        $this->method = $method;
        $this->nobtn = $nobtn;
        $this->modalId = $modalId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.modal');
    }
}

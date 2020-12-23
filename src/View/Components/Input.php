<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $fname;
    public $col;
    public $readonly;
    public $disabled;
    public $type;
    public $placeholder;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name,
        $type = 'text',
        $col = 12,
        $readonly = null,
        $disabled = null,
        $placeholder = null,
        $value = null
    )
    {
        $this->name = $name;
        $this->type = $type;
        $this->col = $col;
        $this->readonly = $readonly;
        $this->disabled = $disabled;
        $this->placeholder = $placeholder;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}

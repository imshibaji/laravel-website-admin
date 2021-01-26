<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $name;
    public $fname;
    public $col;
    public $icon;
    public $readonly;
    public $disabled;
    public $multiple;
    public $type;
    public $placeholder;
    public $option;
    public $required;
    public $addBtn;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name,
        $fname = null,
        $type = 'text',
        $col = 12,
        $icon = null,
        $readonly = null,
        $disabled = null,
        $placeholder = null,
        $multiple=null,
        $required=null
    )
    {
        $this->name = $name;
        $this->fname = $fname ?? $name;
        $this->type = $type;
        $this->col = $col;
        $this->icon = $icon;
        $this->readonly = $readonly;
        $this->disabled = $disabled;
        $this->placeholder = $placeholder;
        $this->multiple = $multiple;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.select');
    }
}

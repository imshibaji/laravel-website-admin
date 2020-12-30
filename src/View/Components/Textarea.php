<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $name;
    public $fname;
    public $col;
    public $required;
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
        $fname = null,
        $type = 'text',
        $col = 12,
        $required = null,
        $readonly = null,
        $disabled = null,
        $placeholder = null,
        $value = null
    )
    {
        $this->name = $name;
        $this->fname = $fname ?? $name;
        $this->type = $type;
        $this->col = $col;
        $this->required = $required;
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
        return view('admin::components.textarea');
    }
}

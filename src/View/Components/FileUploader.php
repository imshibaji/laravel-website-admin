<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class FileUploader extends Component
{
    public $name;
    public $fname;
    public $col;
    public $img;
    public $height;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name,
        $fname = null,
        $col = 12,
        $img = null,
        $height = 100
    )
    {
        $this->name = $name;
        $this->fname = $fname ?? $name;
        $this->col = $col;
        $this->img = $img;
        $this->height = $height;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.file-uploader');
    }
}

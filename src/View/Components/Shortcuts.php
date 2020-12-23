<?php
namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Shortcuts extends Component
{
    public $title;
    public $subtitle;
    public $link;
    public $btn_label;
    public $items;
    public $menus;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->title = config('admin.top_left_menu.dashboard.title');
        $this->subtitle = config('admin.top_left_menu.dashboard.subtitle');
        $this->link = config('admin.prefix') . config('admin.top_left_menu.dashboard.link');
        $this->btn_label = config('admin.top_left_menu.dashboard.btn_label');
        // 'https://source.unsplash.com/random/800x600'
        $this->items = [
            ['src' => 'https://source.unsplash.com/daily?random,800x600', 'title' => 'Image 1' ],
            ['src' => 'https://source.unsplash.com/daily?random,800x600', 'title' => 'Image 2' ],
        ];
        $this->menus = config('admin.top_left_menu.hotmenus');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('admin::components.shortcuts');
    }
}

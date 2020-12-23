<?php
namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;
use Shibaji\Admin\Models\Notify;

class Notification extends Component
{
    public $counts = 0;
    public $datas = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $items = [];
        $this->datas = array_to_object($items);

        $this->counts = count($items);

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('admin::components.notification');
    }
}

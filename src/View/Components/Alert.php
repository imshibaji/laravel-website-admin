<?php


namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type=null, $message=null)
    {
        if(is_array($message)){
            $this->type = $message['type'];
            $this->message = $message['message'];
        }else{
            $this->type = $type;
            $this->message = $message;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('admin::components.alert');
    }
}

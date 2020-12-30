<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class ContactSection extends Component
{

    public $name;
    public $location;
    public $mobile;
    public $description;
    public $userimg;
    public $readmorelink;
    public $messagelink;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name = 'John Devis',
        $location = 'New York, USA',
        $mobile = '+1 234 2345 3456',
        $description = 'This is a project leader',
        $userimg = null,
        $readmorelink = null,
        $messagelink = null
    )
    {
        $this->name = $name;
        $this->mobile = $mobile;
        $this->location = $location;
        $this->description = $description;
        $this->userimg = $userimg;
        $this->readmorelink = $readmorelink;
        $this->messagelink = $messagelink;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.contact-section');
    }
}

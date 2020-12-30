<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class ContactList extends Component
{
    public $title;
    public $email;
    public $userimg;
    public $editlink;
    public $deletelink;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title = 'Merri Diamond',
        $email = '@SaraHopkins.com',
        $userimg = null,
        $editlink = null,
        $deletelink = null
    )
    {
        $this->title = $title;
        $this->email = $email;
        $this->userimg = $userimg;
        $this->editlink = $editlink;
        $this->deletelink = $deletelink;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.contact-list');
    }
}

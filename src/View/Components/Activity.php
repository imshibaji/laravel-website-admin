<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class Activity extends Component
{
    public $datas = [
        [
            'title' => 'Create Invoice',
            'desc' =>  'Created on 05 Jan 2021',
            'link1' => '#',
            'label1' => 'Edit Invoice',
            'color1' => 'primary'
        ],
        [
            'title' => 'Email Send',
            'desc' =>  'Not Email Sent',
            'icon' => 'email-send-outline',
            'color' => 'pink',
            'link1' => '#',
            'label1' => 'Mark Sent',
            'link2' => '#',
            'label2' => 'Send Email',
        ],
        [
            'title' => 'SMS Send',
            'desc' =>  'Not Sms Sent',
            'icon' => 'cellphone-message',
            'color' => 'warning',
            'link1' => '#',
            'label1' => 'Mark Sent',
            'link2' => '#',
            'label2' => 'Send SMS',
        ],
        [
            'title' => 'Get Paid',
            'desc' =>  'Not Paid',
            'icon' => 'cash',
            'color' => 'success',
            'link1' => '#',
            'label1' => 'Mark Paid',
            'link2' => '#',
            'label2' => 'Add Payment',
        ],
    ];

    public function __construct($data = null)
    {
        $this->datas = ($data)? $data : $this->datas;
    }

    public function render()
    {
        return view('admin::components.activity');
    }
}

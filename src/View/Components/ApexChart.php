<?php

namespace Shibaji\Admin\View\Components;

use Illuminate\View\Component;

class ApexChart extends Component
{
    public $title;
    public $options;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $title = 'Apex Chart',
        $options = null
    )
    {
        $this->title = $title;
        $this->options = ($options != null) ? $options : [
            'chart' => [
                'height' => 380,
                'width' => "100%",
                'type' => 'line',
                'stacked' => true,
                'toolbar' => [
                    'show' => false,
                    'autoSelected' => 'zoom'
                ],
            ],
            'series' => [
                [
                    'name' => 'Line',
                    'type' => 'line',
                    'data' => [12,32,43,12,32,70,60]
                ],[
                    'name' => 'Bar',
                    'type' => 'column',
                    'data' => [13,32,43,54,65,76,62]
                ],
            ],
            'xaxis' => [
                'categories' => ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat']
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('admin::components.apex-chart');
    }
}

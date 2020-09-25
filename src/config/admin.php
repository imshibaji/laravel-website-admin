<?php

return [
    'title' => 'Web Admin',

    // URL Prefix for Application
    'prefix' => 'admin',

    // Public Assets Path
    'assets' => 'assets',

    // Set Left Sidebar (leftbar and leftbar2)
    'sidebar' => 'leftbar',

    //Top Menu Left and Submenu
    'top_left_menu' => [
        'label' => 'Shortcuts',
        'dashboard' => [
            'title' => 'The Poworfull Dashboard',
            'subtitle' => 'See all the pages Metrica.',
            'link' => './' ,
            'btn_label' => 'See Dashboard'
        ],
        'hotmenus' => [
            [
                'link' => '/admin',
                'label' => 'Dashboard'
            ],
            [
                'link' => './',
                'label' => 'Another'
            ],
            [
                'link' => './',
                'label' => 'Another1'
            ],
            [
                'link' => './',
                'label' => 'Another 2'
            ],
            [
                'link' => './',
                'label' => 'Another 3'
            ],
            // [
            //     'link' => './',
            //     'label' => 'Another 4'
            // ],
            // [
            //     'link' => './',
            //     'label' => 'Another 5'
            // ],
            // [
            //     'link' => './',
            //     'label' => 'Another 6'
            // ],
        ]
    ],

    //Top Menu Right and Submenu
    'top_right_menu' => [],


    // LeftSide Menu and Submenu
    'left_side_menu' => [
        'dashboard' => [
            [
                'link' => '/admin',
                'label' => 'Dashboard'
            ],
            [
                'link' => '/admin/page',
                'label' => 'Pages'
            ]
        ],
        'app' => [],
        'shop' => [],
        'settings' => [],
        'users' => [],

        // Lower Menu
        'help' => '',
        'profile' => ''
    ],

    // Plugins
    'plugins' => [],
];

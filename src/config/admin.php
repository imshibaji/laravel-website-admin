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
                'link' => '/admin/seo',
                'label' => 'Seo Area'
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

    // Right Panel bar Area
    'right_panel_show' => true,


    // Admin Auth Part
    'guards' => [
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins'
        ],
    ],

    'providers' => [
        'admins' => [
            'driver' => 'eloquent',
            'model' => Shibaji\Admin\Models\Admin::class,
        ],
    ],

    'passwords' => [
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    // Plugins
    'plugins' => [],
];

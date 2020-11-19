<?php

return [
    'title' => 'Web Admin',

    //Admin Logo
    'logo' => '/assets/images/web-admin-logo.png',

    // URL Prefix for Application
    'prefix' => '/admin',

    // Public Assets Path
    'assets' => 'assets',

    // Set Left Sidebar (leftbar and leftbar2)
    'sidebar' => 'leftbar',

    //Top Menu Left and Submenu
    'top_left_menu' => [
        'isView' => false,
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
                'label' => 'Test Nav'
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

    // Searchbar
    'searchbar' => [
        'isView' => false,
        'action' => '#',
        'method' => 'GET',
        'suggestions' => [
            'One',
            'Two'
        ],
    ],

    //Top Menu Right and Submenu
    'top_right_menu' => [
        'lang' => [
            'isView' => false,
            'sub_menus' => [
                [ 'link' => '#', 'label' => 'English', 'icon' => 'us', 'selected' => true ],
                [ 'link' => '#', 'label' => 'Genman', 'icon' => 'germany' ],
                [ 'link' => '#', 'label' => 'Italian', 'icon' => 'italy' ],
                [ 'link' => '#', 'label' => 'French', 'icon' => 'french' ],
                [ 'link' => '#', 'label' => 'Spanish', 'icon' => 'spain' ],
                [ 'link' => '#', 'label' => 'Russian', 'icon' => 'russia' ],
            ],
        ],
        'notify' => false,
        'profile_sub_menus' => [
            ['link' => '#', 'label'=> 'Profile', 'icon' => 'dripicons-user'],
            // ['link' => '#', 'label'=> 'My Wallet', 'icon' => 'dripicons-wallet'],
            // ['link' => '#', 'label'=> 'Settings', 'icon' => 'dripicons-gear'],
            // ['link' => '#', 'label'=> 'Lock Screen', 'icon' => 'dripicons-lock'],
        ]
    ],


    // LeftSide Menu and Submenu
    'left_side_menu' => [
        'dashboard' => [
            [
                'link' => '/admin',
                'label' => 'Dashboard'
            ],
            [
                'link' => '',
                'label' => 'Seo Area',
                'child' => [
                    [
                        'link' => '/admin/seo',
                        'label' => 'All SEOs'
                    ],
                    [
                        'link' => '/admin/seo/create',
                        'label' => 'Add SEO'
                    ]
                ]
            ]
        ],
        'app' => [],
        'shop' => [],
        'settings' => [],
        'users' => [
            [
                'link' => '',
                'label' => 'User Area',
                'child' => [
                    [
                        'link' => '/admin/user',
                        'label' => 'All Users'
                    ],
                    [
                        'link' => '/admin/user/create',
                        'label' => 'Add User'
                    ],
                ],
            ],
        ],
    ],

    // Lower Menu
    'help' => '/admin/help',
    'profile' => [
        'image' => '',
        'name' => 'Website Admin',
        'type' => 'admin',
        'link' => '#',
        'status' => true,
    ],

    // Right Panel bar Area
    'right_panel_show' => false,


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

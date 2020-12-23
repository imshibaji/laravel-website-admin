<?php

return [
    'title' => 'Business ERP',

    //Admin Logo
    'logo' => '/assets/images/web-admin-logo.png',

    // URL Prefix for Application
    'prefix' => '/admin',

    // API URL Prefix for Application
    'api_prefix' => '/api',

    // Public Assets Path
    'assets' => 'assets',

    // Set Left Sidebar (leftbar and leftbar2)
    'sidebar' => 'leftbar',

    //Top Menu Left and Submenu
    'top_left_menu' => [
        'view' => true,
        'label' => 'Quick Find',
        'dashboard' => [
            'title' => 'The Poworfull Dashboard',
            'subtitle' => 'See all the pages Metrica.',
            'link' => '',
            'btn_label' => 'See Dashboard'
        ],
        'hotmenus' => [
            [
                'link' => '/crm',
                'label' => 'CRM Dashboard'
            ],
            [
                'link' => '/user',
                'label' => 'Users'
            ],
            [
                'link' => '/role',
                'label' => 'Roles'
            ],
            [
                'link' => '/permission',
                'label' => 'Permissions'
            ],
            [
                'link' => '/settings',
                'label' => 'Settings'
            ],
        ]
    ],

    // Searchbar
    'searchbar' => [
        'view' => true,
        'action' => '/search',
        'method' => 'GET',
        'suggestions' => [],
    ],

    //Top Menu Right and Submenu
    'top_right_menu' => [
        'lang' => [
            'view' => false,
            'sub_menus' => [
                [ 'link' => '#', 'label' => 'English', 'icon' => 'us' ],
                [ 'link' => '#', 'label' => 'Genman', 'icon' => 'germany' ],
                [ 'link' => '#', 'label' => 'Italian', 'icon' => 'italy' ],
                [ 'link' => '#', 'label' => 'French', 'icon' => 'french' ],
                [ 'link' => '#', 'label' => 'Spanish', 'icon' => 'spain' ],
                [ 'link' => '#', 'label' => 'Russian', 'icon' => 'russia' ],
                [ 'link' => '#', 'label' => 'India', 'icon' => 'india', 'selected' => true ],
            ],
        ],
        'notify' => true,
        'profile_sub_menus' => [
            ['link' => '/profile', 'label'=> 'My Profile', 'icon' => 'dripicons-user'],
            // ['link' => '#', 'label'=> 'My Wallet', 'icon' => 'dripicons-wallet'],
            // ['link' => '#', 'label'=> 'Settings', 'icon' => 'dripicons-gear'],
            // ['link' => '#', 'label'=> 'Lock Screen', 'icon' => 'dripicons-lock'],
        ]
    ],


    // LeftSide Menu and Submenu
    'left_side_menu' => [
        'dashboard' => [
            [
                'link' => '',
                'label' => 'Dashboard'
            ],
            [
                'link' => '/crm',
                'label' => 'CRM Dash'
            ]
        ],
        'app' => [],
        'shop' => [],
        'settings' => [
            [
                'link' => '/settings',
                'label' => 'All Settings',
                'view' => true
            ],
            [
                'link' => '/seo',
                'label' => 'Page SEOs',
                'view' => true
            ],
            [
                'link' => '/profile',
                'label' => 'My Profile',
                'view' => true
            ]
        ],
        'users' =>  [
            [
                'link' => '/user',
                'label' => 'All Users',
                'view' => true
            ],
            [
                'link' => '/role',
                'label' => 'Roles',
                'view' => true
            ],
            [
                'link' => '/permission',
                'label' => 'Permissions',
                'view' => true
            ]
        ],
    ],

    // Lower Menu
    'help' => [
        'link' => '/help',
        'view' => true
    ],
    'profile' => [
        'image' => '',
        'name' => 'My Profile',
        'type' => 'admin',
        'link' => '/profile',
        'view' => true,
    ],

    // Right Panel bar Area
    'right_panel_show' => false,


    // Plugins
    'plugins' => [
        'css' => [],
        'js' => [],
        'images' => []
    ],
];

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
            [
                'link' => '/widgets',
                'label' => 'Widgets'
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
            ],
            [
                'link' => '/widgets',
                'label' => 'All Widgets',
                'view' => true,
            ],
        ],
        'online' => [
            [
                'link' => '/pages',
                'label' => 'Pages',
                'view' => true,
            ],
            [
                'link' => '/posts',
                'label' => 'Posts',
                'view' => true,
            ],
            [
                'link' => '/seo',
                'label' => 'SEOs',
                'view' => true
            ],
        ],
        'offline' => [
            [
                'link' => '/items',
                'label' => 'Items',
                'view' => true,
            ],
            [
                'link' => '',
                'label' => 'Sales',
                'view' => true,
                'child' => [
                    [
                        'link' => '/invoices',
                        'label' => 'Invoices',
                        'view' => true
                    ],
                    [
                        'link' => '/revenues',
                        'label' => 'Revenues',
                        'view' => true
                    ],
                    [
                        'link' => '/customers',
                        'label' => 'Customers',
                        'view' => true
                    ]
                ]
            ],
            [
                'link' => '',
                'label' => 'Purchases',
                'view' => true,
                'child' => [
                    [
                        'link' => '/bills',
                        'label' => 'Bills',
                        'view' => true
                    ],
                    [
                        'link' => '/payments',
                        'label' => 'Payments',
                        'view' => true
                    ],
                    [
                        'link' => '/vendors',
                        'label' => 'Vendors',
                        'view' => true
                    ]
                ]
            ],
            [
                'link' => '',
                'label' => 'Banking',
                'view' => true,
                'child' => [
                    [
                        'link' => '/accounts',
                        'label' => 'Accounts',
                        'view' => true
                    ],
                    [
                        'link' => '/transfers',
                        'label' => 'Transfers',
                        'view' => true
                    ],
                    [
                        'link' => '/transactions',
                        'label' => 'Transactions',
                        'view' => true
                    ],
                    [
                        'link' => '/reconciliations',
                        'label' => 'Reconciliations',
                        'view' => true
                    ]
                ]
            ],
            [
                'link' => '/reports',
                'label' => 'Reports',
                'view' => true
            ]
        ],
        'users' =>  [
            [
                'link' => '/contacts',
                'label' => 'All Contacts',
                'view' => true,
            ],
            [
                'link' => '',
                'label' => 'Employees',
                'view' => true,
                'child' => [
                    [
                        'link' => '/managments',
                        'label' => 'Managments',
                        'view' => true
                    ],
                    [
                        'link' => '/managers',
                        'label' => 'Managers',
                        'view' => true
                    ],
                    [
                        'link' => '/creatives',
                        'label' => 'Creatives',
                        'view' => true
                    ],
                    [
                        'link' => '/suporters',
                        'label' => 'Suporters',
                        'view' => true
                    ],
                    [
                        'link' => '/marketers',
                        'label' => 'Marketers',
                        'view' => true
                    ],
                ],
            ],
            [
                'link' => '/user',
                'label' => 'Users',
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
        'settings' => [
            [
                'link' => '/all-settings',
                'label' => 'General Settings',
                'view' => true,
            ],
            [
                'link' => 'javascript.void(0)',
                'label' => 'All Settings',
                'view' => true,
                'child' => [
                    // This is the Setting Views
                    [
                        'link' => '/setup/business',
                        'label' => 'Business',
                        'desc' => 'Business Name, Address, email, Register & Tax Number etc.',
                        'icon' => 'home',
                        'view' => true
                    ],
                    [
                        'link' => '/locations',
                        'label' => 'Locations',
                        'desc' => 'Branch Name, Address, email, Register & Tax Number etc.',
                        'icon' => 'map',
                        'view' => true
                    ],
                    [
                        'link' => '/setup/local',
                        'label' => 'Localisation',
                        'desc' => 'Set fiscal year, time zone, date format, more.',
                        'icon' => 'map-pin',
                        'view' => true
                    ],
                    [
                        'link' => '/setup/default',
                        'label' => 'Default',
                        'desc' => 'Default account, currency, language of your company.',
                        'icon' => 'layers',
                        'view' => true
                    ],
                    [
                        'link' => '/setup/invoice',
                        'label' => 'Invoice',
                        'desc' => 'Customize invoice prefix, number, terms, footer etc.',
                        'icon' => 'layout',
                        'view' => true
                    ],
                    [
                        'link' => '/setup/bill',
                        'label' => 'Bill',
                        'desc' => 'Customize bill prefix, number, terms, footer etc.',
                        'icon' => 'layout',
                        'view' => true
                    ],
                    [
                        'link' => '/categories',
                        'label' => 'Categories',
                        'desc' => 'Unlimited categories for income, expense, and item',
                        'icon' => 'list',
                        'view' => true
                    ],
                    [
                        'link' => '/currencies',
                        'label' => 'Currencies',
                        'desc' => 'Create and manage currencies and set their rates',
                        'icon' => 'dollar-sign',
                        'view' => true
                    ],
                    [
                        'link' => '/taxes',
                        'label' => 'Taxes',
                        'desc' => 'Fixed, normal, inclusive, and compound tax rates',
                        'icon' => 'activity',
                        'view' => true
                    ],
                ]
            ],
            [
                'link' => '/websites',
                'label' => 'Website Setting',
                'desc' => 'Website Link, logo, keywords, description etc.',
                'icon' => 'server',
                'view' => true
            ],
            [
                'link' => '/countries',
                'label' => 'Countries',
                'view' => true
            ],
            [
                'link' => '/profile',
                'label' => 'My Profile',
                'view' => true
            ],
            [
                'link' => '/updates',
                'label' => 'Updates',
                'view' => true,
            ],
            [
                'link' => '/reset-all',
                'label' => 'Remove All Data',
                'view' => true,
            ],
        ],
        'app' => [
            [
                'link' => '/notifications',
                'label' => 'Notifications',
                'desc' => 'Change the sending protocol and email templates.',
                'icon' => 'mail',
                'view' => true
            ],
            [
                'link' => '/setup/pay-mode',
                'label' => 'Payments Mode',
                'desc' => 'Choose the standard payment option Like PayPal',
                'icon' => 'credit-card',
                'view' => true
            ],
            [
                'link' => '/setup/email',
                'label' => 'Email Setup',
                'desc' => 'Change the sending protocol and email templates.',
                'icon' => 'mail',
                'view' => true
            ],
            [
                'link' => '/setup/smssetup',
                'label' => 'SMS Gateway',
                'desc' => 'Create SMS  Gateway options for admin usage',
                'icon' => 'smartphone',
                'view' => true
            ],
            [
                'link' => '/setup/scheduling',
                'label' => 'Scheduling',
                'desc' => 'Automatic reminders and command for recurring',
                'icon' => 'clock',
                'view' => true
            ],
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

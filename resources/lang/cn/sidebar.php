<?php
return [
    'module' => [
        [
            'id' => 'dashboard',
            'route' => 'dashboard.index',
            'icon' => 'icofont-home',
            'title' => '控制台', // Dashboard
            'activeCondition' => ['dashboard.*'],
        ],
        [
            'id' => 'user',
            'route' => '',
            'icon' => 'icofont-users',
            'title' => '客户', // Customers
            'activeCondition' => ['user.*'],
            'subMenu' => [
                [
                    'title' => '客户', // Customers
                    'route' => 'users.index',
                    'activeCondition' => ['users.index', 'user.create', 'users.edit'],
                ],
                [
                    'title' => '客户分组', // Customer Group
                    'route' => 'users.catalogues.index',
                    'activeCondition' => ['user.catalogue.*']
                ],
            ]
        ],

        [
            'id' => 'post',
            'route' => '',
            'icon' => 'icofont-newspaper',
            'title' => '帖子', // Posts
            'activeCondition' => ['post.*'],
            'subMenu' => [
                [
                    'title' => '帖子', // Posts
                    'route' => 'posts.index',
                    'activeCondition' => ['posts.index', 'posts.create', 'posts.edit'],
                ],
                [
                    'title' => '帖子分组', // Post Group
                    'route' => 'posts.catalogues.index',
                    'activeCondition' => ['post.catalogue.*']
                ],
            ]
        ],

        [
            'id' => 'generalConfig',
            'route' => '',
            'icon' => 'icofont-ui-settings',
            'title' => '配置', // Configuration
            'activeCondition' => ['languages.*'],
            'subMenu' => [
                [
                    'title' => '语言设置', // Language Settings
                    'route' => 'languages.index',
                    'activeCondition' => ['languages.*']
                ],
            ]
        ],

    ]


];

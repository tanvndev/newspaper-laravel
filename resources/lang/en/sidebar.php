<?php
return [
    'module' => [
        [
            'id' => 'dashboard',
            'route' => 'dashboard.index',
            'icon' => 'icofont-home',
            'title' => 'Dashboard',
            'activeCondition' => ['dashboard.*'],
        ],
        [
            'id' => 'user',
            'route' => '',
            'icon' => 'icofont-users',
            'title' => 'Customers',
            'activeCondition' => ['user.*'],
            'subMenu' => [
                [
                    'title' => 'Customers',
                    'route' => 'users.index',
                    'activeCondition' => ['users.index', 'user.create', 'users.edit'],
                ],
                [
                    'title' => 'Customer Group',
                    'route' => 'users.catalogues.index',
                    'activeCondition' => ['user.catalogue.*']
                ],
            ]
        ],

        [
            'id' => 'post',
            'route' => '',
            'icon' => 'icofont-newspaper',
            'title' => 'Posts',
            'activeCondition' => ['post.*'],
            'subMenu' => [
                [
                    'title' => 'Posts',
                    'route' => 'posts.index',
                    'activeCondition' => ['posts.index', 'posts.create', 'posts.edit'],
                ],
                [
                    'title' => 'Post Group',
                    'route' => 'posts.catalogues.index',
                    'activeCondition' => ['post.catalogue.*']
                ],
            ]
        ],

        [
            'id' => 'generalConfig',
            'route' => '',
            'icon' => 'icofont-ui-settings',
            'title' => 'Configuration',
            'activeCondition' => ['language.*'],
            'subMenu' => [
                [
                    'title' => 'Language ',
                    'route' => 'language.index',
                    'activeCondition' => ['language.*']
                ],
            ]
        ],

    ]


];

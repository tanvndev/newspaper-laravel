<?php
return [
    'module' => [
        [
            'id' => 'dashboard',
            'route' => 'dashboard.index',
            'icon' => 'icofont-home',
            'title' => 'Bảng điều khiển',
            'activeCondition' => ['dashboard.*'],
        ],
        [
            'id' => 'user',
            'route' => '',
            'icon' => 'icofont-user',
            'title' => 'QL Thành viên',
            'activeCondition' => ['users.*', 'permissions.*'],
            'subMenu' => [
                [
                    'title' => 'QL Thành viên',
                    'route' => 'users.index',
                    'activeCondition' => ['users.index', 'users.create', 'users.edit'],
                ],
                [
                    'title' => 'QL Nhóm thành viên',
                    'route' => 'users.catalogues.index',
                    'activeCondition' => ['users.catalogues.*']
                ],
                [
                    'title' => 'QL Quyền',
                    'route' => 'permissions.index',
                    'activeCondition' => ['permissions.*']
                ],
            ]
        ],

        [
            'id' => 'post',
            'route' => '',
            'icon' => 'icofont-newspaper',
            'title' => 'QL Bài viết',
            'activeCondition' => ['posts.*'],
            'subMenu' => [
                [
                    'title' => 'QL Bài viết',
                    'route' => 'posts.index',
                    'activeCondition' => ['posts.index', 'posts.create', 'posts.edit'],
                ],
                [
                    'title' => 'QL Nhóm bài viết',
                    'route' => 'posts.catalogues.index',
                    'activeCondition' => ['posts.catalogues.*']
                ],
            ]
        ],
        [
            'id' => 'generalConfig',
            'route' => '',
            'icon' => 'icofont-ui-settings',
            'title' => 'Cấu hình chung',
            'activeCondition' => ['languages.*', 'system.*'],
            'subMenu' => [
                [
                    'title' => 'QL Ngôn ngữ',
                    'route' => 'languages.index',
                    'activeCondition' => ['languages.*']
                ],
                [
                    'title' => 'Cấu hình hệ thống',
                    'route' => 'system.index',
                    'activeCondition' => ['system.*']
                ],
            ]
        ],

    ]
];

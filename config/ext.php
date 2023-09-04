<?php
return [
    'user' => [
        'user_level' => [
            'default' => 1,
            'roles' => [
                'admin' => [
                    'label' => '管理者',
                    'level' => 1024,
                ],
                'user' => [
                    'label' => 'ユーザー',
                    'level' => 1,
                ]
            ]
        ],
    ],
];
<?php
return [
    'role_structure' => [
        'super_admin' => [
            'admins'      => 'c,r,u,d',
            'users'       => 'c,r,u,d',
            'skills'      => 'c,r,u,d',
            'about'       => 'c,r,u,d',
            'resume'      => 'c,r,u,d',
            'portfolio'   => 'c,r,u,d',
            'services'    => 'c,r,u,d',
            'settings'    => 'c,r,u,d',
            'trash'       => 'c,r,u,d',
        ],
        'admin' => [],
        'author' => [],
        'editor' => [],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];

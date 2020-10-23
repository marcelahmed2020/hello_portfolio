<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'admins' => 'c,r,u,d',
            'aboutus' => 'c,r,u,d',
            'resume' => 'c,r,u,d',
            'portfolio' => 'c,r,u,d',
            'services' => 'c,r,u,d',
            'contact' => 'c,r,u,d',
            'settings' => 'c,r,u,d',
            'subscribe' => 'c,r,u,d',
            'trash' => 'c,r,u,d'
        ],
        'administrator' => [],
        'editor' => [],
        'author' => [],
    ],
//    'permission_structure' => [
//        'cru_user' => [
//            'profile' => 'c,r,u'
//        ],
//    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];

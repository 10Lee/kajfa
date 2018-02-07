<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'gembala_fa' => [
            'profile' => 'c,r,u'
        ],
        'gembala_rayon' => [
            'profile' => 'c,r,u,d'
        ],
        'gembala_wilayah' => [
            'profile' => 'c,r,u,d'
        ],
    ],
    'permission_structure' => [],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];

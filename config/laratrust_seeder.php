<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'master' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'principal' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'student' => [
            'profile' => 'r,u,d',
        ],
        'teacher' => [
            'profile' => 'c,r,u,d',
        ],

        'parent' => [
            'profile' => 'r',
        ],
        'librarian' => [

            'profile' => 'c,r,u,d',
        ],
        'accountant' => [
            'profile' => 'c,r,u,d',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];

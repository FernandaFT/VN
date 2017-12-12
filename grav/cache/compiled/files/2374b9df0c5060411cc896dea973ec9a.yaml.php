<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/VN/grav/user/config/groups.yaml',
    'modified' => 1510604365,
    'data' => [
        'registered' => [
            'icon' => 'users',
            'readableName' => 'registered Users',
            'description' => 'The group of registered users',
            'access' => [
                'site' => [
                    'login' => 'true'
                ]
            ]
        ],
        'clients' => [
            'readableName' => 'Clients',
            'description' => 'Defaut Clients Access',
            'icon' => 'money',
            'access' => [
                'admin' => [
                    'login' => 'true',
                    'pages' => 'true',
                    'stats' => 'true',
                    'cache' => 'true',
                    'configuration' => 'true',
                    'backup' => 'true',
                    'email' => 'true',
                    'maintenance' => 'true'
                ],
                'site' => [
                    'login' => 'true'
                ]
            ]
        ],
        'administrators' => [
            'groupname' => 'administrators',
            'readableName' => 'Administrators',
            'description' => 'team VegaNavascues',
            'icon' => 'child',
            'access' => [
                'admin' => [
                    'super' => 'true',
                    'login' => 'true',
                    'cache' => 'true',
                    'configuration' => 'true',
                    'configuration_system' => 'true',
                    'configuration_site' => 'true',
                    'configuration_media' => 'true',
                    'configuration_info' => 'true',
                    'settings' => 'true',
                    'pages' => 'true',
                    'maintenance' => 'true',
                    'plugins' => 'true',
                    'themes' => 'true',
                    'users' => 'true',
                    'configuratio_info' => 'true',
                    'stats' => 'true'
                ],
                'admin-addon-user-manager' => [
                    
                ],
                'site' => [
                    'login' => 'true'
                ]
            ]
        ]
    ]
];

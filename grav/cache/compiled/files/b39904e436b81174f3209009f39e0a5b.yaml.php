<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/VN/grav/user/themes/navascues/blueprints/contact.yaml',
    'modified' => 1510604676,
    'data' => [
        'title' => 'PLUGIN_ADMIN.DEFAULT',
        'rules' => [
            'slug' => [
                'pattern' => '[a-zA-Zа-яA-Я0-9_\\-]+',
                'min' => 1,
                'max' => 200
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'contact' => [
                            'type' => 'tab',
                            'title' => 'Contact',
                            'fields' => [
                                'header.contact' => [
                                    'name' => 'Contact',
                                    'type' => 'columns',
                                    'label' => 'Contact',
                                    'fields' => [
                                        'header.columnRight' => [
                                            'type' => 'column',
                                            'label' => 'columnRight',
                                            'fields' => [
                                                'header.contactImage' => [
                                                    'type' => 'file',
                                                    'label' => 'Contact Image',
                                                    'destination' => 'self@',
                                                    'limit' => 1,
                                                    'filesize' => 1,
                                                    'accept' => [
                                                        0 => 'image/*'
                                                    ]
                                                ],
                                                'header.contactTitle' => [
                                                    'type' => 'text',
                                                    'label' => 'Contact title'
                                                ],
                                                'header.mail' => [
                                                    'type' => 'text',
                                                    'label' => 'Contact mail'
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'options' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.OPTIONS',
                            'fields' => [
                                'publishing' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.PUBLISHING',
                                    'underline' => true,
                                    'fields' => [
                                        'header.published' => [
                                            'type' => 'toggle',
                                            'toggleable' => true,
                                            'label' => 'PLUGIN_ADMIN.PUBLISHED',
                                            'help' => 'PLUGIN_ADMIN.PUBLISHED_HELP',
                                            'highlight' => 1,
                                            'size' => 'medium',
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.YES',
                                                0 => 'PLUGIN_ADMIN.NO'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'header.date' => [
                                            'type' => 'datetime',
                                            'label' => 'PLUGIN_ADMIN.DATE',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.DATE_HELP'
                                        ],
                                        'header.publish_date' => [
                                            'type' => 'datetime',
                                            'label' => 'PLUGIN_ADMIN.PUBLISHED_DATE',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.PUBLISHED_DATE_HELP'
                                        ],
                                        'header.unpublish_date' => [
                                            'type' => 'datetime',
                                            'label' => 'PLUGIN_ADMIN.UNPUBLISHED_DATE',
                                            'toggleable' => true,
                                            'help' => 'PLUGIN_ADMIN.UNPUBLISHED_DATE_HELP'
                                        ],
                                        'header.metadata' => [
                                            'toggleable' => true,
                                            'type' => 'array',
                                            'label' => 'PLUGIN_ADMIN.METADATA',
                                            'help' => 'PLUGIN_ADMIN.METADATA_HELP',
                                            'placeholder_key' => 'PLUGIN_ADMIN.METADATA_KEY',
                                            'placeholder_value' => 'PLUGIN_ADMIN.METADATA_VALUE'
                                        ]
                                    ]
                                ],
                                'taxonomies' => [
                                    'type' => 'section',
                                    'title' => 'PLUGIN_ADMIN.TAXONOMIES',
                                    'underline' => true,
                                    'fields' => [
                                        'header.taxonomy' => [
                                            'type' => 'taxonomy',
                                            'label' => 'PLUGIN_ADMIN.TAXONOMY',
                                            'multiple' => true,
                                            'validate' => [
                                                'type' => 'array'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'advanced' => [
                            'type' => 'tab',
                            'title' => 'PLUGIN_ADMIN.ADVANCED',
                            'fields' => [
                                'columns' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column1' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'settings' => [
                                                    'type' => 'section',
                                                    'title' => 'PLUGIN_ADMIN.SETTINGS',
                                                    'underline' => true
                                                ],
                                                'folder' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_ADMIN.FOLDER_NAME',
                                                    'validate' => [
                                                        'rule' => 'slug'
                                                    ]
                                                ],
                                                'route' => [
                                                    'type' => 'parents',
                                                    'label' => 'PLUGIN_ADMIN.PARENT',
                                                    'classes' => 'fancy'
                                                ],
                                                'name' => [
                                                    'type' => 'select',
                                                    'classes' => 'fancy',
                                                    'label' => 'PLUGIN_ADMIN.PAGE_FILE',
                                                    'help' => 'PLUGIN_ADMIN.PAGE_FILE_HELP',
                                                    'default' => 'default',
                                                    'data-options@' => '\\Grav\\Common\\Page\\Pages::pageTypes'
                                                ],
                                                'header.body_classes' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_ADMIN.BODY_CLASSES'
                                                ]
                                            ]
                                        ],
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'order_title' => [
                                                    'type' => 'section',
                                                    'title' => 'PLUGIN_ADMIN.ORDERING',
                                                    'underline' => true
                                                ],
                                                'ordering' => [
                                                    'type' => 'toggle',
                                                    'label' => 'PLUGIN_ADMIN.FOLDER_NUMERIC_PREFIX',
                                                    'help' => 'PLUGIN_ADMIN.FOLDER_NUMERIC_PREFIX_HELP',
                                                    'highlight' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'order' => [
                                                    'type' => 'order',
                                                    'label' => 'PLUGIN_ADMIN.SORTABLE_PAGES',
                                                    'sitemap' => NULL
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/VN/grav/user/config/site.yaml',
    'modified' => 1513117543,
    'data' => [
        'title' => 'Vega Navascués',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Team Navascues',
            'email' => 'veganavascues@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];

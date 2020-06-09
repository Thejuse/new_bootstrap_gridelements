<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'New Bootstrap Gridelements',
    'description' => 'Build grids easy with Bootstrap 4 & Gridelements.',
    'category' => 'plugin',
    'author' => 'Julian Seidl',
    'author_email' => 'hi@jseidl.at',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '9.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.99-9.99.99',
            'gridelements' => '9.0.0-9.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

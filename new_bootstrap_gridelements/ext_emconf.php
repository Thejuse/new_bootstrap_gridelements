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
    'version' => '1.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.99-10.99.99',
            'gridelements' => '8.0.0-10.99.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

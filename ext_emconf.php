<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'htmlArea RTE',
    'description' => 'Rich Text Editor.',
    'category' => 'be',
    'state' => 'obsolete',
    'uploadfolder' => 1,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'Stanislas Rolland',
    'author_email' => 'typo3(arobas)sjbr.ca',
    'author_company' => 'SJBR',
    'version' => '8.7.1',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'rtehtmlarea_api_manual' => '',
            'setup' => '',
        ],
    ],
];

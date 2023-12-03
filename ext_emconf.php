<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Remove legacy params',
    'description' => 'Remove legacy params early from PSR-7 FE request',
    'category' => 'fe',
    'state' => 'stable',
    'author' => 'Stefan Bürk',
    'author_email' => 'stefan@buerk.tech',
    'author_company' => '',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0 - 12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

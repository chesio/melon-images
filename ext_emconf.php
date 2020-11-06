<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Melon Images',
    'description' => 'Responsive Images Management for TYPO3 8.7',
    'category' => 'plugin',
    'author' => 'Sebastian Michaelsen',
    'author_email' => 'sebastian@michaelsen.io',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-10.4.99',
            'php' => '7.0.0-7.4.99',
        ],
    ],
];

<?php

/**
 * Extension Manager/Repository config file for ext "svelte_demo".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Svelte Demo',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'NoCompany\\SvelteDemo\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Matthias',
    'author_email' => 'matthias@example.com',
    'author_company' => 'No Company',
    'version' => '1.0.0',
];

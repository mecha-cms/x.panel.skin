<?php

return [
    'sample-1' => [
        'title' => 'Menu 1',
        'description' => 'Description for sample menu 1.',
        'url' => $_['/'] . '/::g::/my-custom-panel',
        'stack' => 10
    ],
    'sample-2' => [
        'title' => 'Menu 2',
        'description' => 'Description for sample menu 2.',
        'lot' => [
            'sample-2-1' => [
                'title' => 'Menu 2.1',
                'lot' => [
                    'sample-2-1-1' => [
                        'title' => 'Menu 2.1.1',
                        'link' => 'https://example.com',
                        'stack' => 10
                    ],
                    'sample-2-1-2' => [
                        'title' => 'Menu 2.1.2',
                        'link' => 'https://example.com',
                        'stack' => 20
                    ]
                ],
                'url' => "",
                'stack' => 10
            ],
            'sample-2-2' => [
                'title' => 'Menu 2.2',
                'url' => "",
                'stack' => 20
            ]
        ],
        'url' => "",
        'stack' => 20
    ]
];
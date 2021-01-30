<?php

$desk = [];

// Add title and description
$desk['form']['lot'][1]['title'] = 'Desk Title';
$desk['form']['lot'][1]['description'] = 'Desk description goes here. Current panel task is <code>' . To::JSON($_['task']) . '</code>, current panel type is <code>' . To::JSON($_['type']) . '</code>, current panel path is <code>' . To::JSON($_['path']) . '</code>, current panel file/folder is <code>' . To::JSON($_['f']) . '</code>, current panel offset is <code>' . To::JSON($_['i']) . '</code>.';

// Add task(s)
$tasks = [
    'sample-1' => [
        'title' => 'Button 1',
        'description' => 'Description for button 1.',
        'stack' => 50
    ],
    'sample-2' => [
        'title' => 'Button 2',
        'description' => 'Description for button 2.',
        'type' => 'link',
        'url' => $url . $_['/'] . '/::g::/my-custom-panel',
        'stack' => 60
    ]
];

if ('page' === $_['type']) {
    $desk['form']['lot'][0]['lot']['tasks']['lot'] = $tasks;
}

return $desk;

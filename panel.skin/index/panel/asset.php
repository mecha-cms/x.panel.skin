<?php

$asset = [];

// Remove the default style
$asset['panel.skin.dark'] = [
    'skip' => true
];

// Add your custom style(s) here
$z = defined('DEBUG') && DEBUG ? '.' : '.min.';
$asset['panel.skin.custom'] = [
    'path' => __DIR__ . DS . '..' . DS . '..' . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'index' . $z . 'css',
    'stack' => 20.1
];

return $asset;

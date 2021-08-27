<?php

$skin = [];

// Add your custom skin here
$z = defined('DEBUG') && DEBUG ? '.' : '.min.';
$skin[MY_SKIN_NAME] = [
    'title' => 'My Custom Skin',
    'path' => stream_resolve_include_path(__DIR__ . DS . '..' . DS . '..' . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'index' . $z . 'css')
];

return $skin;
<?php

Hook::set('get', function() use($url) {
    extract($GLOBALS, EXTR_SKIP);
    if (!isset($_['/']) || 0 !== strpos($url->path, $_['/'])) {
        return;
    }
    // Remove all style(s) from the default layout
    foreach (g(LOT . DS . 'x' . DS . 'panel' . DS . 'lot' . DS . 'layout' . DS . 'asset' . DS . 'css', 'css', true) as $k => $v) {
        Asset::let($k);
    }
    // Add your style(s) here
    $z = defined('DEBUG') && DEBUG ? '.' : '.min.';
    Asset::set(__DIR__ . DS . 'lot' . DS . 'asset' . DS . 'css' . DS . 'theme' . $z . 'css', 20.1);
}, 20);

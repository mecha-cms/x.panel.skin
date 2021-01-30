<?php

if (is_file($asset = __DIR__ . DS . 'panel' . DS . 'asset.php')) {
    $_['asset'] = array_replace_recursive($_['asset'] ?? [], require $asset);
}

if (is_file($bar = __DIR__ . DS . 'panel' . DS . 'bar.php')) {
    $_['lot']['bar']['lot'][1]['lot'] = array_replace_recursive($_['lot']['bar']['lot'][1]['lot'] ?? [], require $bar);
}

if (is_file($desk = __DIR__ . DS . 'panel' . DS . 'desk.php')) {
    $_['lot']['desk']['lot'] = array_replace_recursive($_['lot']['desk']['lot'] ?? [], require $desk);
}

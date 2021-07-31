<?php

if (is_file($skin = __DIR__ . DS . 'panel' . DS . 'skin.php')) {
    $_['skin'] = array_replace_recursive($_['skin'] ?? [], require $skin);
}

if (MY_SKIN_NAME === ($state->x->panel->skin ?? P)) {
    if (is_file($bar = __DIR__ . DS . 'panel' . DS . 'bar.php')) {
        $_['lot']['bar']['lot'][1]['lot'] = array_replace_recursive($_['lot']['bar']['lot'][1]['lot'] ?? [], require $bar);
    }
    if (is_file($desk = __DIR__ . DS . 'panel' . DS . 'desk.php')) {
        $_['lot']['desk']['lot'] = array_replace_recursive($_['lot']['desk']['lot'] ?? [], require $desk);
    }
}

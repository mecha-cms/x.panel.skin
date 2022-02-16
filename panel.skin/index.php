<?php

define('MY_SKIN_NAME', 'my-custom-skin');

if (MY_SKIN_NAME === ($state->x->panel->skin ?? P) && is_file($route = __DIR__ . DS . 'index' . DS . 'panel' . DS . 'route.php')) {
    require $route;
}
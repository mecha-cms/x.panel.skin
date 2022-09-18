<?php

// Add skin name selector
if ('.state' === $_['path'] && 'get' === $_['task']) {
    $_['lot']['desk']['lot']['form']['lot'][1]['lot']['tabs']['lot']['panel']['lot']['fields']['lot']['skin'] = [
        'name' => 'state[x][panel][skin][name]',
        'type' => 'option',
        'value' => $state->x->panel->skin->name ?? 'none',
        'lot' => ['none' => 'None'],
        'stack' => 40
    ];
}
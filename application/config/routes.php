<?php
return [
    //MainController
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],
    'catalog/{page:\d+}' => [
        'controller' => 'main',
        'action' => 'catalog'
    ],
    'category/{id:\d+}' => [
        'controller' => 'main',
        'action' => 'category'
    ],
    'cart' => [
        'controller' => 'main',
        'action' => 'cart'
    ],
    'hit' => [
        'controller' => 'main',
        'action' => 'hit'
    ],
    'sales' => [
        'controller' => 'main',
        'action' => 'sales'
    ],

];
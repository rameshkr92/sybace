<?php
$adminMenu[19] = [
    'icon' => 'table',
    'list_head' => [
        'name' => trans('Tutorials::tutorials.manage').' '.trans('Tutorials::tutorials.tutorials'),
        'link' => '/'.App::getLocale().'/admin/tutorials',
    ],
    'list_tree'=> [
        0 => [
            'name' => trans('Tutorials::tutorials.all').' '.trans('Tutorials::tutorials.tutorials'),
            'link' => '/'.App::getLocale().'/admin/tutorials',
        ],
        1 => [
            'name' => trans('Tutorials::tutorials.create').' '.trans('Tutorials::tutorials.tutorial'),
            'link' => '/'.App::getLocale().'/admin/tutorials/create',
        ]
    ]
];
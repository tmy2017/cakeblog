<?php

class ArticlesController extends AppController
{
    public $component = [
        'Paginator' => [
            'Article' => [
                'conditions' => ['published' => 1]
            ]
        ]
    ];
}
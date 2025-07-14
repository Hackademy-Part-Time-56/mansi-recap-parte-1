<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $cards = [
        [
            'image' => 'https://picsum.photos/seed/aaapicsum/235/250',
            'title' => 'Card 1',
            'description' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
        ],
        [
            'image' => 'https://picsum.photos/seed/picsum/235/250',
            'title' => 'Card 2',
            'description' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
        ],
        [
            'image' => 'https://picsum.photos/seed/fggg/235/250',
            'title' => 'Card 3',
            'description' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
        ],
        [
            'image' => 'https://picsum.photos/seed/sdfsd/235/250',
            'title' => 'Card 4',
            'description' => 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
        ],
    ];

    return view('pages.homepage', compact('cards'));
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'jobs' => [
            [
                'title' => 'PHP Developer',
                'salary'   => '$60,000',
            ],
            [
                'title' => 'Python Developer',
                'salary'   => '$70,000',
            ],
            [
                'title' => 'Java Developer',
                'salary'   => '$80,000',
            ],
    ]]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});



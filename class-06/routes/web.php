<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'Hello World',
        'name' => 'Lary',    
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$100.000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$50.000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40.000'
            ],
        ],
    ]);
});
Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$100.000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$50.000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40.000'
        ],
    ];
    // Illuminate\Support\Arr::first($jobs, function ($job) use ($id) {
    //     return $job['id'] == $id;
    // });
    $job = Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);
    // dd($job);

    if(!$job) {
        abort((404));
    };
    return view('job', ['job' => $job]);
});
Route::get('/contact', function () {
    return view('contact');
});
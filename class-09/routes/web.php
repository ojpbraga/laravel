<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    //$jobs = Job::all();
    //dd($jobs[0]);

    return view('welcome', [
        'greeting' => 'Hello World',
        'name' => 'Lary',    
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});
Route::get('/jobs/{id}', function ($id) {
    // Illuminate\Support\Arr::first($jobs, function ($job) use ($id) {
    //     return $job['id'] == $id;
    // });
    // dd($job);
    // $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);
    $job = Job::find($id);
    
    return view('job', ['job' => $job]);
});
Route::get('/contact', function () {
    return view('contact');
});
<?php

use App\Livewire\BlogPage;
use App\Livewire\ContactPage;
use App\Livewire\FeaturePage;
use App\Livewire\HomePage;
use App\Livewire\TestimonialPage;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', HomePage::class);
Route::get('/features', FeaturePage::class);
Route::get('/contact', ContactPage::class);
Route::get('/testimonials', TestimonialPage::class);
Route::get('/blog', BlogPage::class);

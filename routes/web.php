<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

Route::get('/', [TemplateController::class, 'index'])->name('home');
Route::get('/about', [TemplateController::class, 'about'])->name('about');
Route::get('/services', [TemplateController::class, 'services'])->name('services');
Route::get('/projects', [TemplateController::class, 'projects'])->name('projects');
Route::get('/testimonial', [TemplateController::class, 'testimonial'])->name('testimonial');
Route::get('/contact', [TemplateController::class, 'contact'])->name('contact');
Route::post('/contact-submit', [TemplateController::class, 'contactSubmit'])
    ->name('contact.submit');
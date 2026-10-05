<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home');
Route::livewire('/students', 'pages::students')->name('students');
Route::livewire('/projects', 'pages::projects')->name('projects');

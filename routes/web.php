<?php

use App\Http\Controllers\TaskController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('tasks', \App\Livewire\Tasks\Index::class)->name('tasks.livewire.index');
    Route::get('tasks/create', \App\Livewire\Tasks\Create::class)->name('tasks.livewire.create');
    Route::get('tasks/edit/{task}', \App\Livewire\Tasks\Edit::class)->name('tasks.livewire.edit');

    Route::resource('laravel/tasks', TaskController::class);

    Route::view('about', 'about')->name('about');
});

require __DIR__.'/auth.php';

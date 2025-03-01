<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\User\Profile;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->as("user.")->group(function () {
    Route::get("" , Profile::class)->name("profile");
});
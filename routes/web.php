<?php

use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name("home");

require_once __DIR__."/auth.php";
require_once __DIR__."/room.php";
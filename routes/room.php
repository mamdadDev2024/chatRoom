<?php

use App\Livewire\Home;
use App\Livewire\Room\Index;
use App\Livewire\Room\Single;
use App\Livewire\Room\Update;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Route;

Route::prefix("room")->as("room.")->group(function (Blueprint $table){
    Route::get("index" , Index::class)->name("index");
    Route::get("show" , Single::class)->name("show");
    Route::get("update" , Update::class)->name("update");
});
require_once __DIR__."/auth.php";
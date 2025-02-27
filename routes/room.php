<?php

use App\Livewire\Room\Index;
use App\Livewire\Room\Show;
use App\Livewire\Room\Single;
use App\Livewire\Room\Update;
use Illuminate\Support\Facades\Route;

Route::prefix("room")->as("room.")->group(function (){
    Route::get("index" , Index::class)->name("index");
    Route::get("single/{Room:slug}" , Single::class)->name("single");
    Route::get("update" , Update::class)->name("update");
    Route::get("/{Room:slug}" , Show::class)->name("show");
});
require_once __DIR__."/auth.php";
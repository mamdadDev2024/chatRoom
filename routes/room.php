<?php

use App\Livewire\Room\Index;
use App\Livewire\Room\Single;
use App\Livewire\Room\Update;
use Illuminate\Support\Facades\Route;

Route::prefix("room")->as("room.")->group(function (){
    Route::get("index" , Index::class)->name("index");
    Route::get("show/{Room:slug}" , Single::class)->name("show");
    Route::get("update" , Update::class)->name("update");
});
require_once __DIR__."/auth.php";
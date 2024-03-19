<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ItemController::class, 'read'])->name('reading');
Route::get('/create', [ItemController::class, 'create'])->name('creating');
Route::post("/create", [ItemController::class, 'createConfirm'])->name('create.confirm');
Route::get('/update{item}', [ItemController::class, 'update'])->name('updating');
Route::post("/update{item}", [ItemController::class, 'updateConfirm'])->name('update.confirm');
Route::get("/{item}", [ItemController::class, 'delete'])->name('deleting');
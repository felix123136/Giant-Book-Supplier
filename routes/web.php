<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublisherController;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index']);

Route::get('/books/{book}', [BookController::class, 'show']);

Route::get('/categories/{category}', [CategoryController::class, 'show']);

Route::get('/publishers', [PublisherController::class, 'index']);

Route::get('/publishers/{publisher}', [PublisherController::class, 'show']);

Route::get('/contact', [ContactController::class, 'index']);

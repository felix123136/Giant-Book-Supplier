<?php

use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('books.index', [
        'books' => Book::all()
    ]);
});

Route::get('/books/{book}', function (Book $book) {
    $publisherName = DB::table('publishers')->where('id', $book->publisher_id)->first();
    return view('books.show', [
        'book' => $book,
        'publisher' => $publisherName
    ]);
});

Route::get('/categories/{category}', function (Category $category) {
    $bookIds = DB::table('book_categories')->where('category_id', $category->id)->pluck('book_id');
    $books = array();
    foreach ($bookIds as $bookId) {
        $book = DB::table('books')->where('id', $bookId)->first();
        array_push($books, $book);
    }
    return view('categories.show', [
        'category' => $category,
        'books' => $books
    ]);
});

Route::get('/publishers', function () {
    $publishers = Publisher::all();
    return view('publishers.index', [
        "publishers" => $publishers
    ]);
});

Route::get('/publishers/{publisher}', function (Publisher $publisher) {
    $books = DB::table('books')->where('publisher_id', $publisher->id)->get();
    return view('publishers.show', [
        "publisher" => $publisher,
        "books" => $books
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

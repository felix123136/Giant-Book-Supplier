<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
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
    }
}

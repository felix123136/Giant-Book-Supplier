<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::all();
        return view('publishers.index', [
            "publishers" => $publishers
        ]);
    }

    public function show(Publisher $publisher)
    {
        $books = DB::table('books')->where('publisher_id', $publisher->id)->get();
        return view('publishers.show', [
            "publisher" => $publisher,
            "books" => $books
        ]);
    }
}

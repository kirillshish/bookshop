<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request; // todo unused
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class HomeController extends Controller
{
    public function show() // todo index, and return type
    {
        $books = DB::table('books')->get();

        return view('home', ['books' => $books]); // todo use compact
    }

    public function book(Book $book): View // todo move to books controller
    {
        return view('book', compact('book'));
    }

}

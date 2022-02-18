<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class HomeController extends Controller
{
    public function show()
    {
        $books = DB::table('books')->get();

        return view('home', ['books' => $books]);
    }

    public function book(Book $book): View
    {


        return view('book', compact('book'));
    }
    public function order($id): View
    {

        return view('order',compact('book'));
    }

}

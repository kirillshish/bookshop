<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;

class ContactsController extends Controller
{
    public function show()
    {
        return view('contacts', ['phone' => '89874179999']);
    }
}
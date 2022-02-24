<?php

namespace App\Http\Controllers;

use App\Models\BasketItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Basket;

class BasketController extends Controller
{
    public function addItem(Request $request)
    {
        $validated = $request->validate([ // todo unused
            'id' => 'required'
        ]);
        $userId = Auth::id();
        $basket = Basket::query()
            ->where('user_id', $userId)
            ->whereNull('deleted_at')
            ->first();

        if (is_null($basket)) { // todo use collections methods, read about collections
            $basket = Basket::query()->create([
                'user_id' => $userId,
            ]);
        }

        BasketItem::query()->create( // todo relationships
            [
                'basket_id' => $basket->id,
                'book_id' => $request->get('id')
            ]
        );


    }
}

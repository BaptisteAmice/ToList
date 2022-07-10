<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index()
    {
        return 'item';
    }


    public function show($id)
    {

        $items = Item::all();
        //dd($items);

        $item = $items[$id] ?? 'Item inconnu';

        return view('item',
        [
            'item' => $item
        ]);
    }
}

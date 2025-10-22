<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return inertia('Items/Index', [
            'items' => $items,
        ]);
    }

    public function add()
    {
        return inertia('Items/Add');
    }
}

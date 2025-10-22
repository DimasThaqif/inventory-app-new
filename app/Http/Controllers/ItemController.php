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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|numeric|digits_between:1,11',
        ]);

        Item::create($request->all());

        return redirect()->route('items.index')->with('success', 'Item added successfully.');
    }
}

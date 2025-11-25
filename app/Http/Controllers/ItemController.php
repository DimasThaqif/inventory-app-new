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
            'name' => 'required|string|max:255|unique:items,name',
            'qty' => 'required|numeric|digits_between:1,11',
            'unit' => 'required|string|max:100',
        ]);

        Item::create($request->all());

        return redirect()->route('items.index')->with('success', 'Item added successfully.');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);


        return inertia('Items/Edit', [
            'item' => $item,
        ]);
    }

    public function update(Request $request, $id)
{
    $item = Item::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255|unique:items,name,' . $item->id,
        'unit' => 'required|string|max:100',
        'qty' => 'nullable|numeric|digits_between:1,11',
    ]);

    $item->update($request->all());

    return redirect()->route('items.index')->with('success', 'Item updated successfully.');
}

    public function editStock($id)
    {
        $item = Item::findOrFail($id);

        return inertia('Items/EditStock', [
            'item' => $item,
        ]);
    }

}

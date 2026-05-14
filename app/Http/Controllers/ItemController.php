<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    private $items = [
        ['id' => 1, 'name' => 'Aloe Vera', 'type' => 'Succulent', 'water' => 'Once a week'],
        ['id' => 2, 'name' => 'Snake Plant', 'type' => 'Indoor', 'water' => 'Twice a month'],
        ['id' => 3, 'name' => 'Rose', 'type' => 'Flower', 'water' => 'Everyday'],
        ['id' => 4, 'name' => 'Cactus', 'type' => 'Desert', 'water' => 'Once every 2 weeks'],
        ['id' => 5, 'name' => 'Basil', 'type' => 'Herb', 'water' => 'Daily']
    ];

    // SHOW ALL ITEMS
    public function index()
    {
        $items = $this->items;
        return view('items.index', compact('items'));
    }

    // SHOW SINGLE ITEM
    public function show($id)
    {
        $items = $this->items;
        $item = collect($items)->firstWhere('id', $id);

        return view('items.show', compact('item'));
    }
}

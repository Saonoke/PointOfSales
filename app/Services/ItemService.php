<?php

namespace App\Services;

use App\Models\Item;
use App\Models\Category;
use App\Contracts\ItemContract;


class ItemService implements ItemContract{

    public function storeItem(array $validatedData):void{
        $item = Item::create($validatedData);
        
        $category = Category::findOrFail($validatedData['category_id']);
        $item->category()->associate($category);
        $item->save();
    }

    public function editItem(array $validatedData, Item $item):void{
        $item->update($validatedData);

        $category = Category::findOrFail($validatedData['category_id']);
        $item->category()->associate($category);
        $item->save();
    }

    public function deleteItem(Item $item):void{
        $item->category()->dissociate();
        $item->delete();
    }

    public function getCategory()
    {
        return Category::orderBy('category_name', 'asc')->get()->pluck('category_name', 'id');
    }

}